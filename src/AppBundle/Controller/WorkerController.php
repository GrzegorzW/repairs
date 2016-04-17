<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Device;
use AppBundle\Entity\Localization;
use AppBundle\Entity\Message;
use AppBundle\Entity\PokwitowanieHistory;
use AppBundle\Entity\Repair;
use AppBundle\Entity\RepairCost;
use AppBundle\Entity\User;
use AppBundle\Entity\WorkerOrder;
use AppBundle\Entity\WorkerOrderStatus;
use AppBundle\Form\OrderType;
use AppBundle\Form\RepairPricingType;
use AppBundle\Form\RepairType;
use AppBundle\Form\ResetPasswordType;
use AppBundle\Form\UserType;
use AppBundle\Form\WorkerMessageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class WorkerController extends Controller
{
    /**
     * @Route(
     *      "/worker/repairs",
     *      name="worker_panel_repairs"
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @return array
     * @throws \LogicException
     */
    public function repairsAction(Request $request)
    {
        $repairManager = $this->get('repair_manager');
        /** @var User $worker */
        $worker = $this->getUser();

        $searchingQuery = $repairManager->prepareForPagination($request->query->all(), $worker);
        $pagination = $this->get('pagination_manager')->myPagination($searchingQuery);

        return [
            'pagination' => $pagination,
            'repairersToSelect' => $this->get('user_manager')->getRepairersToSelect($worker),
            'statusesToSelect' => $repairManager->getAllStatusesToSelect()
        ];
    }

    /**
     * @Route(
     *      "/worker/repairs/{id}",
     *      name="worker_panel_repair_details",
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
        $repairManager = $this->get('repair_manager');
        $financialManager = $this->get('financial_manager');
        $userManager = $this->get('user_manager');
        $changelogManager = $this->get('changelog_manager');
        /** @var User $worker */
        $worker = $this->getUser();

        if (!$userManager->hasWorkerAccessToRepair($worker, $repair)) {
            return $this->redirectToRoute('worker_panel_repairs');
        }

        $newMessage = new Message();
        $formWorkerMessage = $this->createForm(new WorkerMessageType($this->isGranted('ROLE_PERMISSION_PUBLIC_MESSAGES')), $newMessage);
        if ($formWorkerMessage->handleRequest($request)->isValid()) {
            $message = $this->get('communication_manager')->sendMessage($worker, $repair, $newMessage);
            $this->get('notification_manager')->addNewMessageNotifications($message, $worker);
            $this->addFlash('success', $this->get('translator')->trans('flashMessageAdded'));
            if ($repair->getUser()->getEmail() && ($newMessage->getType() == Message::TYPE_PUBLIC)) {
                $this->get('email_manager')->sendMail(
                    $repair->getUser()->getEmail(),
                    $worker->getLocalization()->getCompany()->getEmailSubjectBegin() . ' ' . $this->get('translator')->trans('emailRepairSubject'),
                    [
                        'repair' => $repair
                    ],
                    'AppBundle:Emails:newMessage.html.twig'
                );
                $this->addFlash('success', $this->get('translator')->trans('flashEmailSended'));
            }
            return $this->redirectToRoute('worker_panel_repair_details', ['id' => $repair->getId()]);
        }

        $repairCost = new RepairCost();
        $formPricing = $this->createForm(new RepairPricingType(), $repairCost);
        if ($formPricing->handleRequest($request)->isValid()) {
            $financialManager->addRepairCost($repairCost, $repair, $worker);
            $this->addFlash('success', $this->get('translator')->trans('flashEntryAdded'));
            return $this->redirectToRoute('worker_panel_repair_details', ['id' => $repair->getId()]);
        }

        $repairCostsAndPrices = $financialManager->getFinancialRepairReportByUser($repair, $worker);

        return [
            'repair' => $repair,
            'form' => $formWorkerMessage->createView(),
            'repairersToSelect' => $userManager->getRepairersToSelect($worker),
            'statusesToSelect' => $repairManager->getAllStatusesToSelect(),
            'timeline' => $repairManager->getRepairTimeline($repair),
            'formPricing' => $formPricing->createView(),
            'repairCostsAndPrices' => $repairCostsAndPrices,
            'financialSummary' => $financialManager->getRepairCostPriceAndProfit($repairCostsAndPrices, $repair, $worker),
            'repairChangelog' => $changelogManager->getChangelog($repair),
            'repairPricingChangelog' => $changelogManager->getPricingChangelog($repair->getStatement()),
            'paymentMethods' => $financialManager->getAllPaymentMethods(),
            'acceptationMethods' => $financialManager->getAllAcceptationMethods(),
            'lastRepairTotalPricing' => $repairManager->getLastTotalRepairPricing($repair)
        ];
    }

    /**
     * @Route(
     *      "/worker/repairs/pricing-edit/{id}",
     *      name="worker_panel_repair_pricing_edit",
     *      requirements={"id": "\d+"}
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @param RepairCost $repairCost
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function editRepairCostAction(Request $request, RepairCost $repairCost)
    {
        if (!$this->get('user_manager')->hasWorkerAccessToPricing($this->getUser(), $repairCost)) {
            return $this->redirectToRoute('worker_panel_repairs');
        }

        $formPricing = $this->createForm(new RepairPricingType(), $repairCost);

        $formPricing->add('save', 'submit', [
            'label' => 'Zatwierdź'
        ]);
        $formPricing->add('delete', 'submit', [
            'label' => 'Usuń'
        ]);

        if ($formPricing->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if ($formPricing->get('save')->isClicked()) {
                $this->get('financial_manager')->save($repairCost);
                $em->persist($repairCost);
                $this->addFlash('success', $this->get('translator')->trans('flashEntryEdited'));
            }
            if ($formPricing->get('delete')->isClicked()) {
                if (false === $this->getUser()->hasRole('ROLE_SUPER_ADMIN')) {
                    throw new AccessDeniedException();
                }
                $em->remove($repairCost);
                $this->addFlash('success', $this->get('translator')->trans('flashRepairCostDeleted'));
            }
            $em->flush();

            return $this->redirectToRoute('worker_panel_repair_details', ['id' => $repairCost->getRepair()->getId()]);
        }

        return [
            'editCostForm' => $formPricing->createView(),
            'repairCost' => $repairCost,
            'pricingChangelog' => $this->get('changelog_manager')->getChangelog($repairCost)
        ];
    }

    /**
     * @Route(
     *      "/worker/pokwitowanie/add-user",
     *      name="worker_panel_pokwitowanie_user_add"
     * )
     *
     * @Template()
     *
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function addUserAction(Request $request)
    {
        $userManager = $this->get('user_manager');     
        
        if ($request->query->has('findUserPhrase')) {
            $searchedPhrases = $userManager->findClientByPhrase($request->query->get('findUserPhrase'));
            $pagination = $this->get('pagination_manager')->myPagination($searchedPhrases);
        }

        /** @var Localization $localization */
        $localization = $this->getUser()->getLocalization();
        
        $user = new User($localization);
        $formAddUser = $this->createForm(UserType::class, $user);

        if ($formAddUser->handleRequest($request)->isValid()) {
            try {
                $userManager->createUserAccount($user);
                $this->addFlash('success', $this->get('translator')->trans('flashUserAdded'));
                return $this->redirectToRoute('worker_panel_pokwitowanie_add_device', ['id' => $user->getId()]);
            } catch (\Exception $e) {
                $this->addFlash('error', $this->get('translator')->trans('flashDatabaseTransactionError'));
            }
        }

        return [
            'form' => $formAddUser->createView(),
            'pagination' => isset($pagination) ? $pagination : null,
        ];
    }

    /**
     * @Route(
     *      "/worker/pokwitowanie/users/{id}/devices",
     *      name="worker_panel_pokwitowanie_add_device",
     *      requirements={"id": "\d+"}
     * )
     *
     * @Template()
     * @param User $client
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addDeviceAction(User $client)
    {
        return [
            'deviceTypes' => $this->get('custom_field_template_manager')->getDeviceTypes(),
            'paymentMethods' => $this->get('financial_manager')->getAllPaymentMethods(),
            'user' => $client
        ];
    }

    /**
     * @Route(
     *      "/worker/pokwitowanie/devices/{device}/repair",
     *      name="worker_panel_pokwitowanie_add_repair"
     * )
     *
     * @Template()
     * @param Request $request
     * @param Device $device
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @internal param Request $request
     * @throws \LogicException
     */
    public function addRepairAction(Request $request, Device $device)
    {
        /** @var User $worker */
        $worker = $this->getUser();
        $repair = new Repair($worker->getLocalization());

        $formRepair = $this->createForm(RepairType::class, $repair);
        if ($formRepair->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->beginTransaction();

            try {
                $this->get('repair_manager')->createRepair($device, $repair, $worker);
                $this->get('pokwitowanie_history_manager')->setPokwitowanieHistory($repair, $worker);

                $this->addFlash('success', $this->get('translator')->trans('flashRepairAdded'));

                if ($repair->getUser()->getEmail()) {
                    $this->get('email_manager')->sendMail(
                        $repair->getUser()->getEmail(),
                        $worker->getLocalization()->getCompany()->getEmailSubjectBegin() . ' ' . $this->get('translator')->trans('emailBeginSubject'),
                        ['repair' => $repair],
                        'AppBundle:Emails:newRepairConfirmation.html.twig');

                    $this->addFlash('success', $this->get('translator')->trans('flashRegistrationConfirmation'));
                }

                $em->commit();

                return $this->redirectToRoute('worker_panel_pokwitowanie_print', ['id' => $repair->getId()]);

            } catch (\Exception $e) {
                $em->rollback();
                $this->addFlash('error', $this->get('translator')->trans('flashDatabaseTransactionError'));
            }
        }

        return [
            'device' => $device,
            'formRepair' => $formRepair->createView()
        ];
    }

    /**
     * @Route(
     *      "/worker/pokwitowanie/{id}/print",
     *      name="worker_panel_pokwitowanie_print",
     *      requirements={"id": "\d+"}
     * )
     * @ParamConverter("repair", options={"mapping": {"id": "repair_id"}})
     *
     * @Template()
     * @param PokwitowanieHistory $repair
     * @return array
     */
    public function pokwitowanieAction(PokwitowanieHistory $repair)
    {
        return [
            'repair' => $repair,
            'regulations' => unserialize($repair->getRegulations())
        ];
    }

    /**
     * @Route(
     *      "/worker/pokwitowanie-example/{id}/print",
     *      name="worker_panel_pokwitowanie-example_print",
     *      requirements={"id": "\d+"}
     * )
     */
    public function pokwitowanieExampleAction(Localization $localization)
    {
        return $this->render('AppBundle:Worker:pokwitowanie.html.twig', [
            'repair' => $this->get('pokwitowanie_history_manager')->prepareExampleHistoryEntry($localization),
            'regulations' => $this->get('regulations_manager')->getAllRegulations()
        ]);
    }

    /**
     * @Route(
     *      "/worker/opinions",
     *      name="worker_panel_opinions"
     * )
     *
     * @Template()
     */
    public function opinionsAction()
    {
        return [
            'pagination' => $this->get('pagination_manager')->myPagination($this->get('repair_manager')->getRepairsWithOpinions())
        ];
    }

    /**
     * @Route(
     *      "/worker/users",
     *      name="worker_panel_users"
     * )
     *
     * @Template()
     * @param Request $request
     * @return array
     * @throws \LogicException
     */
    public function usersAction(Request $request)
    {
        $userManager = $this->get('user_manager');

        if ($phrase = $request->query->get('phrase')) {
            $dataToPaginate = $userManager->findClientByPhrase($phrase);
        } else {
            $dataToPaginate = $userManager->getClients();
        }

        return [
            'pagination' => $this->get('pagination_manager')->myPagination($dataToPaginate)
        ];
    }

    /**
     * @Route(
     *      "/worker/user/{id}",
     *      name="worker_panel_user_details",
     *      requirements={"id": "\d+"}
     * )
     *
     * @Template()
     * @param Request $request
     * @param User $user
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function userDetailsAction(Request $request, User $user)
    {
        $userManager = $this->get('user_manager');

        $formResetPassword = $this->createForm(new ResetPasswordType(), $user);
        if ($formResetPassword->handleRequest($request)->isValid()) {
            $userManager->resetUserPassword($user);

            $this->addFlash('success', $this->get('translator')->trans('flashPasswordReset'));
            return $this->redirectToRoute('worker_panel_user_details', ['id' => $user->getId()]);
        }

        $formEditUser = $this->createForm(UserType::class, $user);
        if ($formEditUser->handleRequest($request)->isValid()) {
            $userManager->save($user);

            $this->addFlash('success', $this->get('translator')->trans('flashUserDataChanged'));
            return $this->redirectToRoute('worker_panel_user_details', ['id' => $user->getId()]);
        }

        return [
            'user' => $user,
            'formEditUser' => $formEditUser->createView(),
            'formResetPassword' => $formResetPassword->createView()
        ];
    }

    /**
     * @Route(
     *      "/worker/orders",
     *      name="worker_orders"
     * )
     *
     * @Template()
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \LogicException
     */
    public function workerOrdersAction(Request $request)
    {
        $workerOrderManager = $this->get('worker_order_manager');

        $workerOrder = new WorkerOrder($workerOrderManager->getOrderStatus(WorkerOrderStatus::ORDER_TO_ORDER));
        $formOrder = $this->createForm(new OrderType(), $workerOrder);

        if ($formOrder->handleRequest($request)->isValid()) {
            $workerOrder->setAuthor($this->getUser());
            $workerOrderManager->save($workerOrder);

            $this->addFlash('success', $this->get('translator')->trans('flashEntryAdded'));
            return $this->redirectToRoute('worker_orders');
        }

        return [
            'pagination' => $this->get('pagination_manager')->myPagination($workerOrderManager->getOrdersQuery()),
            'formOrder' => $formOrder->createView(),
            'statuses' => $workerOrderManager->getAllStatuses()
        ];
    }

    /**
     * @Route(
     *      "/worker/devices",
     *      name="worker_panel_devices"
     * )
     *
     * @Template()
     * @param Request $request
     * @return array
     * @throws \LogicException
     */
    public function devicesAction(Request $request)
    {
        $searchingQuery = $this->get('device_manager')->getDevicesQuery($request->get('phrase'), $this->getUser());

        return [
            'pagination' => $this->get('pagination_manager')->myPagination($searchingQuery),
        ];
    }

    /**
     * @Route(
     *      "/worker/devices/{id}",
     *      name="worker_panel_device_details"
     * )
     *
     * @Template()
     * @param Device $device
     * @return array
     */
    public function deviceDetailsAction(Device $device)
    {
        return [
            'device' => $device,
        ];
    }
}