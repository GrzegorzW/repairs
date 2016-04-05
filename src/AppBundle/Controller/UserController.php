<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Message;
use AppBundle\Entity\Repair;
use AppBundle\Entity\User;
use AppBundle\Form\ClientSideUserType;
use AppBundle\Form\UserMessageType;
use AppBundle\Form\UserOpinionType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

class UserController extends Controller
{
    /**
     * @Route(
     *      "/user",
     *      name="pokwitowanie_user_panel"
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function repairsAction(Request $request)
    {
        $repairManager = $this->get('repair_manager');

        /** @var User $client */
        $client = $this->getUser();
        /** @var Repair $repairWithAddOpinionFlag */
        $repairWithAddOpinionFlag = $repairManager->getUserRepairWithOpinionFlag($client);

        if ($repairWithAddOpinionFlag) {
            $addOpinionUrl = $this->generateUrl('pokwitowanie_user_panel_details', ['id' => $repairWithAddOpinionFlag->getId()]);
            $repairManager->setAddOpinionFlag($repairWithAddOpinionFlag, 0);
            $repairManager->save($repairWithAddOpinionFlag);
        }

        if (false === $client->getFirstLoginModalRendered()) {
            $client->setFirstLoginModalRendered(true);
            $repairManager->save($client);
            $renderFirstLoginModal = true;
        }

        $formEditUser = $this->createForm(ClientSideUserType::class, $client);
        if ($formEditUser->handleRequest($request)->isValid()) {
            $repairManager->save($client);

            $this->addFlash('success', $this->get('translator')->trans('flashClientSideUserDataChanged'));
            return $this->redirectToRoute('pokwitowanie_user_panel');
        }
        
        return [
            'user' => $client,
            'formEditUser' => $formEditUser->createView(),
            'addOpinionUrl' => isset($addOpinionUrl) ? $addOpinionUrl : null,
            'renderFirstLoginModal' => isset($renderFirstLoginModal)
        ];
    }

    /**
     * @Route(
     *      "/user/repairs/{id}",
     *      name="pokwitowanie_user_panel_details",
     *      requirements={"id": "\d+"}
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @param Repair $repair
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function repairDetailsAction(Request $request, Repair $repair)
    {
        /** @var User $client */
        $client = $this->getUser();

        if ($client !== $repair->getUser()) {
            $this->addFlash('error', $this->get('translator')->trans('flashNoRepair'));
            return $this->redirectToRoute('pokwitowanie_user_panel');
        }

        $repairManager = $this->get('repair_manager');

        $newUserMessage = new Message();
        $formNewUserMessage = $this->createForm(new UserMessageType(), $newUserMessage);

        if ($formNewUserMessage->handleRequest($request)->isValid()) {
            $newUserMessage->setType(Message::TYPE_PUBLIC);
            $message = $this->get('communication_manager')->sendMessage($client, $repair, $newUserMessage);
            $this->get('notification_manager')->addNewMessageNotifications($message, $client);

            $this->addFlash('success', $this->get('translator')->trans('flashMessageAdded'));
            return $this->redirectToRoute('pokwitowanie_user_panel_details', ['id' => $repair->getId()]);
        }

        $formOpinion = $this->createForm(new UserOpinionType(), $repair);
        if ($formOpinion->handleRequest($request)->isValid()) {
            $repair->setOpinionDate(new \DateTime(date('Y-m-d H:i:s')));
            $repairManager->save($repair);

            $this->addFlash('success', $this->get('translator')->trans('flashOpinionAdded'));
            return $this->redirectToRoute('pokwitowanie_user_panel_details', ['id' => $repair->getId()]);
        }

        return [
            'repair' => $repair,
            'formNewUserMessage' => $formNewUserMessage->createView(),
            'formOpinion' => $formOpinion->createView(),
            'timeline' => $repairManager->getRepairTimeline($repair),
            'lastRepairTotalPricing' => $repairManager->getLastTotalRepairPricing($repair)
        ];
    }

    /**
     * @Route("/pricing-accepted", name="pricing_accepted_email")
     *
     * @Template()
     */
    public function pricingAcceptedUsingEmailAction()
    {
        return [];
    }

    /**
     * @Route("/pricing-already-accepted", name="pricing_already_accepted")
     *
     * @Template()
     */
    public function pricingAlreadyAcceptedAction()
    {
        return [];
    }
}