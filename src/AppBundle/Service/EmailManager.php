<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Company;
use AppBundle\Entity\Repair;
use AppBundle\Entity\Status;
use AppBundle\Entity\TotalRepairPricing;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\Translation\TranslatorInterface;

class EmailManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $mailerUser;
    private $mailer;
    private $templating;
    private $translator;
    private $company;

    public function __construct(\Swift_Mailer $mailer, $mailerUser, TwigEngine $templating, EntityManager $entityManager, TranslatorInterface $translator)
    {
        $this->em = $entityManager;
        $this->mailerUser = $mailerUser;
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->translator = $translator;
        $this->company = $entityManager->getRepository('AppBundle:Company')->findOneBy(['id' => Company::COMPANY_ID]);
    }
//todo dodac nazwe wysylajacego?
    public function sendMail($to, $subject, $body = [], $twigTemplate)
    {
        $mail = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom($this->mailerUser)
            ->setTo($to)
            ->setBody(
                $this->templating->render($twigTemplate, $body),
                'text/html'
            );
        $this->mailer->send($mail);
    }

    public function setTemplateByStatusId($statusId)
    {
        switch ($statusId) {
            case Status::STATUS_WAITING_FOR_DIAGNOSIS:
                $twigTemplate = 'AppBundle:Emails:waitingForDiagnosis.html.twig';
                break;
            case Status::STATUS_DIAGNOSING:
                $twigTemplate = 'AppBundle:Emails:diagnosing.html.twig';
                break;
            case Status::STATUS_WAITING_FOR_ACCEPTATION:
                $twigTemplate = 'AppBundle:Emails:waitingForAcceptation.html.twig';
                break;
            case Status::STATUS_ACCEPTED:
                $twigTemplate = 'AppBundle:Emails:repairPricingAccepted.html.twig';
                break;
            case Status::STATUS_REPARATION:
                $twigTemplate = 'AppBundle:Emails:reparation.html.twig';
                break;
            case Status::STATUS_RESIGNATION:
                $twigTemplate = 'AppBundle:Emails:resignation.html.twig';
                break;
            case Status::STATUS_READY:
                $twigTemplate = 'AppBundle:Emails:ready.html.twig';
                break;
            case Status::STATUS_RETURNED:
                $twigTemplate = 'AppBundle:Emails:leaveOpinion.html.twig';
                break;
            default:
                return false;
        }

        return $twigTemplate;
    }

    public function setSubjectByStatusId($statusId)
    {
        switch ($statusId) {
            case Status::STATUS_WAITING_FOR_DIAGNOSIS:
                $subject = $this->company->getEmailSubjectBegin() .' '. $this->translator->trans('emailWaitingForDiagnosis');
                break;
            case Status::STATUS_DIAGNOSING:
                $subject = $this->company->getEmailSubjectBegin() .' '. $this->translator->trans('emailDiagnosing');
                break;
            case Status::STATUS_WAITING_FOR_ACCEPTATION:
                $subject = $this->company->getEmailSubjectBegin() .' '. $this->translator->trans('emailWaitingForAcceptation');
                break;
            case Status::STATUS_ACCEPTED:
                $subject = $this->company->getEmailSubjectBegin() .' '. $this->translator->trans('emailRepairPricingAccepted');
                break;
            case Status::STATUS_REPARATION:
                $subject = $this->company->getEmailSubjectBegin() .' '. $this->translator->trans('emailReparation');
                break;
            case Status::STATUS_RESIGNATION:
                $subject = $this->company->getEmailSubjectBegin() .' '. $this->translator->trans('emailResignation');
                break;
            case Status::STATUS_READY:
                $subject = $this->company->getEmailSubjectBegin() .' '. $this->translator->trans('emailReady');
                break;
            case Status::STATUS_RETURNED:
                $subject = $this->company->getEmailSubjectBegin() .' '. $this->translator->trans('emailLeaveOpinionSubject');
                break;
            default:
                return false;
        }

        return $subject;
    }

    public function sendStatusAcceptedEmail(TotalRepairPricing $totalRepairPricing)
    {
        /** @var Repair $repair */
        $repair = $totalRepairPricing->getRepair();

        $this->sendMail(
            $repair->getUser()->getEmail(),
            $this->setSubjectByStatusId(Status::STATUS_ACCEPTED),
            [
                'repair' => $repair,
                'totalRepairPricing' => $totalRepairPricing
            ],
            $this->setTemplateByStatusId(Status::STATUS_ACCEPTED));
    }

    public function sendStatusWaitingForAcceptationEmail(TotalRepairPricing $totalRepairPricing, $message)
    {
        /** @var Repair $repair */
        $repair = $totalRepairPricing->getRepair();

        $this->sendMail(
            $repair->getUser()->getEmail(),
            $this->setSubjectByStatusId(Status::STATUS_WAITING_FOR_ACCEPTATION),
            [
                'repair' => $repair,
                'additionalMessage' => $message ?: null,
                'totalRepairPricing' => $totalRepairPricing
            ],
            $this->setTemplateByStatusId(Status::STATUS_WAITING_FOR_ACCEPTATION));
    }
}
