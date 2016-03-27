<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Company;
use AppBundle\Entity\Localization;
use AppBundle\Entity\Regulations;
use AppBundle\Entity\User;
use AppBundle\Form\CompanyType;
use AppBundle\Form\EditRegulatoryType;
use AppBundle\Form\LocalizationType;
use AppBundle\Form\RemoveRepairerType;
use AppBundle\Form\RepairerType;
use AppBundle\Form\ReportType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route(
     *      "/admin/management",
     *      name="admin_management"
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @return array
     * @throws \LogicException
     */
    public function adminManagementAction(Request $request)
    {
        /** @var Company $company */
        $company = $this->getUser()->getLocalization()->getCompany();

        $formCompany = $this->createForm(new CompanyType(), $company);

        if ($formCompany->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();

            $this->addFlash('success', $this->get('translator')->trans('flashChangesConfirmation'));
        }

        return [
            'localizations' => $this->get('localization_manager')->getAllLocalizations(),
            'regulations' => $this->get('regulations_manager')->getAllRegulations(),
            'repairCostKinds' => $this->get('repair_manager')->getAllRepairCostKinds(),
            'paymentMethods' => $this->get('financial_manager')->getAllPaymentMethods(),
            'deviceTypes' => $this->get('custom_field_template_manager')->getDeviceTypes(),
            'formCompany' => $formCompany->createView(),
            'company' => $company
        ];
    }

    /**
     * @Route(
     *      "/admin/management/localizations/add",
     *      name="admin_management_localization_add"
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function addLocalizationAction(Request $request)
    {
        $localization = new Localization();
        $formLocalization = $this->createForm(new LocalizationType(), $localization);

        if ($formLocalization->handleRequest($request)->isValid()) {
            /** @var Company $company */
            $company = $this->getUser()->getLocalization()->getCompany();
            $localization->setCompany($company);
            $em = $this->getDoctrine()->getManager();
            $em->persist($localization);
            $em->flush();

            $this->addFlash('success', $this->get('translator')->trans('flashLocalizationAdded'));
            return $this->redirectToRoute('admin_management');
        }

        return [
            'formLocalization' => $formLocalization->createView()
        ];
    }

    /**
     * @Route(
     *      "/admin/management/device-types/add",
     *      name="admin_management_device_type_add"
     * )
     *
     * @Template()
     *
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addDeviceTypeAction()
    {
        return [];
    }

    /**
     * @Route(
     *      "/admin/management/localizations/{id}/edit",
     *      name="admin_management_localization_edit",
     *      requirements={"id": "\d+"}
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @param Localization $localization
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function editLocalizationAction(Request $request, Localization $localization)
    {
        $formLocalization = $this->createForm(new LocalizationType(), $localization);

        if ($formLocalization->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($localization);
            $em->flush();

            $this->addFlash('success', $this->get('translator')->trans('flashLocalizationEdited'));
            return $this->redirectToRoute('admin_management');
        }

        return [
            'formLocalization' => $formLocalization->createView()
        ];
    }

    /**
     * @Route(
     *      "/admin/management/regulatory/paragraphs/{id}/edit",
     *      name="admin_management_regulatory_paragraph_edit",
     *      requirements={"id": "\d+"}
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @param Regulations $paragraph
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function editParagraphAction(Request $request, Regulations $paragraph)
    {
        $formEditParagraph = $this->createForm(new EditRegulatoryType(), $paragraph);
        $formEditParagraph->add('save', 'submit', [
            'label' => 'Zatwierdź zmiany'
        ]);

        $formEditParagraph->add('delete', 'submit', [
            'label' => 'Usuń'
        ]);

        if ($formEditParagraph->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if ($formEditParagraph->get('save')->isClicked()) {
                $em->persist($paragraph);
                $this->addFlash('success', $this->get('translator')->trans('flashChangesConfirmation'));
            }
            if ($formEditParagraph->get('delete')->isClicked()) {
                $em->remove($paragraph);
                $this->addFlash('success', $this->get('translator')->trans('flashParagraphDeleted'));
            }

            $em->flush();

            return $this->redirectToRoute('admin_management');
        }

        return [
            'form' => $formEditParagraph->createView()
        ];
    }

    /**
     * @Route(
     *      "/admin/management/regulatory/paragraph/add",
     *      name="admin_management_regulatory_paragraph_add"
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function addParagraphAction(Request $request)
    {
        $paragraph = new Regulations();
        $formEditParagraph = $this->createForm(new EditRegulatoryType(), $paragraph);
        $formEditParagraph->add('save', 'submit', [
            'label' => 'Dodaj'
        ]);

        if ($formEditParagraph->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($paragraph);
            $em->flush();
            $this->addFlash('success', $this->get('translator')->trans('flashParagraphAdded'));
            return $this->redirectToRoute('admin_management');
        }

        return [
            'form' => $formEditParagraph->createView()
        ];
    }

    /**
     * @Route(
     *      "/admin/management/localization/{id}/add-repairer",
     *      name="admin_management_add_repairer",
     *      requirements={"id": "\d+"}
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @param Localization $localization
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function addRepairerAction(Request $request, Localization $localization)
    {
        $userManager = $this->get('user_manager');
        /** @var User $superAdmin */
        $superAdmin = $this->getUser();

        $worker = new User();
        $formAddRepairer = $this->createForm(new RepairerType($userManager), $worker);

        if ($formAddRepairer->handleRequest($request)->isValid()) {
            try {
                $userManager->createWorkerAccount($worker, $localization);
                $this->get('email_manager')->sendMail(
                    $worker->getEmail(),
                    $superAdmin->getLocalization()->getCompany()->getEmailSubjectBegin() . ' ' . $this->get('translator')->trans('emailNewRepairer'),
                    [
                        'worker' => $worker
                    ],
                    'AppBundle:Emails:newRepairer.html.twig'
                );
                $this->addFlash('success', $this->get('translator')->trans('flashRepairerAdded'));
                return $this->redirectToRoute('admin_management_edit_repairer', ['id' => $worker->getId()]);
            } catch (\Exception $e) {
                $this->addFlash('error', $this->get('translator')->trans('flashUsernameOrEmailIsOccupied'));
                return $this->redirectToRoute('admin_management_add_repairer', ['id' => $localization->getId()]);
            }
        }

        return [
            'formRepairer' => $formAddRepairer->createView()
        ];
    }

    /**
     * @Route(
     *      "/admin/management/repairer/{id}/edit",
     *      name="admin_management_edit_repairer",
     *      requirements={"id": "\d+"}
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @param User $worker
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function editRepairerAction(Request $request, User $worker)
    {
        $userManager = $this->get('user_manager');
        $repairManager = $this->get('repair_manager');

        $repairerType = new RepairerType($userManager);
        if ($worker->hasRole('ROLE_SUPER_ADMIN')) {
            $repairerType->setRoles(false);
        }
        $repairerType->setReadonlyUsername(true);

        $formEditRepairer = $this->createForm($repairerType, $worker);
        if ($formEditRepairer->handleRequest($request)->isValid()) {
            $worker->addRole('ROLE_WORKER'); //Because only permissions are displayed
            $userManager->save($worker);
            $this->addFlash('success', $this->get('translator')->trans('flashChangesConfirmation'));
            return $this->redirectToRoute('admin_management');
        }

        $formRemoveRepairer = $this->createForm(new RemoveRepairerType(), $worker);
        if ($formRemoveRepairer->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->beginTransaction();

            try {
                $repairManager->ridWorkerOfActiveRepairs($worker, $this->getUser());
                $userManager->releaseWorker($worker);
                $em->commit();
                
                $this->addFlash('success', $this->get('translator')->trans('flashEmployeeFired'));
                return $this->redirectToRoute('admin_management');

            } catch (\Exception $e) {
                $em->rollback();
                $this->addFlash('error', $this->get('translator')->trans('flashDatabaseTransactionError'));
            }
        }

        return [
            'formRepairer' => $formEditRepairer->createView(),
            'formRemoveRepairer' => $formRemoveRepairer->createView(),
            'repairer' => $worker,
            'activeRepairs' => $repairManager->getActiveRepairsByRepairer($worker)
        ];
    }

    /**
     * @Route(
     *      "/admin/report",
     *      name="admin_report"
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @return array
     */
    public function reportAction(Request $request)
    {
        $financialManager = $this->get('financial_manager');

        $reportForm = $this->createForm(new ReportType());

        if ($reportForm->handleRequest($request)->isValid()) {
            $startDate = $reportForm['startDate']->getData();
            $endDate = $reportForm['endDate']->getData();
            $choice = $reportForm['choice']->getData();
            $entries = $reportForm['entries']->getData();
            $localization = $reportForm['localization']->getData();
            $paymentMethod = $reportForm['payment_method']->getData();

            $financialSummaryCollection = $financialManager->getFinancialSummaryItems($startDate, $endDate, $choice, $localization, $entries, $paymentMethod);
            $reportSummary = $financialManager->getReportSummary($financialSummaryCollection);
        }

        return [
            'financialSummaryCollection' => isset($financialSummaryCollection) ? $financialSummaryCollection : null,
            'reportSummary' => isset($reportSummary) ? $reportSummary : null,
            'reportForm' => $reportForm->createView()
        ];
    }

}