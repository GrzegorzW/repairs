<?php

namespace ApiBundle\Controller;

use Exception;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;
use JMS\Serializer\SerializationContext;
use AppBundle\Entity\CustomFieldTemplate;
use AppBundle\Entity\DeviceType;
use AppBundle\Entity\DeviceTypeInput;
use AppBundle\Entity\Localization;
use AppBundle\Entity\Message;
use AppBundle\Entity\Notification;
use AppBundle\Entity\PaymentMethod;
use AppBundle\Entity\Repair;
use AppBundle\Entity\RepairCost;
use AppBundle\Entity\RepairCostKind;
use AppBundle\Entity\Status;
use AppBundle\Entity\TotalRepairPricing;
use AppBundle\Entity\TotalRepairPricingResponseMethod;
use AppBundle\Entity\TotalRepairPricingStatus;
use AppBundle\Entity\User;
use AppBundle\Entity\WorkerOrder;
use AppBundle\Entity\WorkerOrderStatus;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class RestApiController
 * @package AppBundle\Controller
 * @Rest\NamePrefix("api_")
 */
class RestApiController extends BaseController
{
    /**
     *
     * @ApiDoc(
     *   description = "Remove custom field template.",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     400 = "Returned when form is invalid",
     *     403 = "Returned when unauthorized"
     *   }
     * )
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @Rest\Delete("/admin/management/custom-field-templates/{customFieldTemplate}", name="remove_custom_field_template")
     * @param CustomFieldTemplate $customFieldTemplate
     * @return Response
     * @throws \LogicException
     */
    public function removeDeviceTypeTemplateAction(CustomFieldTemplate $customFieldTemplate)
    {
        $customFieldTemplate->setVisible(false);

        $em = $this->getDoctrine()->getManager();
        $em->persist($customFieldTemplate);
        $em->flush();

        return $this->response([], 204, ['none']);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Remove device type.",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     400 = "Returned when form is invalid",
     *     403 = "Returned when unauthorized"
     *   }
     * )
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @Rest\Delete("/admin/management/device-type/{deviceType}", name="remove_device_type")
     * @param DeviceType $deviceType
     * @return Response
     * @throws \LogicException
     */
    public function removeDeviceTypeAction(DeviceType $deviceType)
    {
        $deviceType->setIsVisible(false);

        $em = $this->getDoctrine()->getManager();
        $em->persist($deviceType);
        $em->flush();

        return $this->response([], 204, ['none']);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Create device type custom field template.",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Returned when form is invalid",
     *     403 = "Returned when unauthorized"
     *   }
     * )
     *
     * @RequestParam(name="customFieldName", nullable=false, allowBlank=false, strict=true, description="Custom field template name")
     * @RequestParam(name="customFieldRequired", default="0", requirements="[0-1]", description="Is custom field template required")
     * @RequestParam(name="customFieldTypeSelect", allowBlank=false, nullable=false, strict=true, requirements="[1|2]", description="Custom field template type")
     * @RequestParam(map=true, name="customFieldOptions", description="Custom field template options values")
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @Rest\Post("/admin/management/device-type/{deviceType}", name="create_device_type_custom_field")
     * @param ParamFetcher $paramFetcher
     * @param DeviceType $deviceType
     * @return Response
     * @internal param CustomFieldTemplate $customFieldTemplate
     */
    public function createDeviceTypeCustomFieldTemplateAction(ParamFetcher $paramFetcher, DeviceType $deviceType)
    {
        $customFieldTemplate = $this->get('device_manager')->createCustomFieldTemplate($deviceType, $paramFetcher->all());

        return $this->response($customFieldTemplate, 200, ['customFieldTemplate']);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Create device.",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Returned when form is invalid",
     *     403 = "Returned when unauthorized"
     *   }
     * )
     *
     * Description: Create device.
     *
     * @RequestParam(name="typeSelect", allowBlank=false, nullable=false, strict=true, requirements="\d+", description="Device type")
     * @RequestParam(name="brand", nullable=false, allowBlank=false, strict=true, description="Device brand")
     * @RequestParam(name="model", nullable=false, allowBlank=false, strict=true, description="Device model")
     * @RequestParam(name="serial", nullable=false, allowBlank=false, strict=true, description="Device serial")
     * @RequestParam(map=true, name="customFields", description="Custom fields")
     *
     * @Security("is_granted('ROLE_WORKER')")
     *
     * @Rest\Post("/users/{client}/devices", name="create_device")
     * @param User $client
     * @param ParamFetcher $paramFetcher
     * @return Response
     */
    public function createDeviceAction(ParamFetcher $paramFetcher, User $client)
    {
        $device = $this->get('device_manager')->createDevice($paramFetcher->all(), $client);

        return $this->response($device, 200, ['device']);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Get device type fields.",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Returned when form is invalid",
     *     403 = "Returned when unauthorized"
     *   }
     * )
     *
     * Description: Get device type fields.
     *
     * @Security("is_granted('ROLE_WORKER')")
     *
     * @Rest\Get("/device-type/{deviceType}", name="get_device_type_fields")
     * @param DeviceType $deviceType
     * @return Response
     */
    public function getDeviceTypeFieldsAction(DeviceType $deviceType)
    {
        $templates = $this->get('custom_field_template_manager')->getVisibleTemplates($deviceType);

        return $this->response($templates, 200, ['customFieldTemplate']);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Add device type.",
     *   statusCodes = {
     *     201 = "Returned when successful",
     *     400 = "Returned when form is invalid",
     *     403 = "Returned when unauthorized"
     *   }
     * )
     *
     * Description: Add device type.
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @RequestParam(name="deviceTypeName", allowBlank=false, nullable=false, strict=true, requirements=@Assert\Length(min = 2, max = 40), description="Device type name")
     * @RequestParam(map=true, name="inputs", description="Additional fields")
     *
     * @Rest\Post("/admin/management/device-type", name="add_device_type")
     * @param ParamFetcher $paramFetcher
     * @return Response
     */
    public function addDeviceTypeAction(ParamFetcher $paramFetcher)
    {
        $deviceTypeInput = new DeviceTypeInput($paramFetcher->get('deviceTypeName'), $paramFetcher->get('inputs'));

        $customFieldTemplateManager = $this->get('custom_field_template_manager');

        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();

        try {
            $deviceType = new DeviceType();
            $deviceType->setName($deviceTypeInput->getDeviceTypeName());
            $deviceType->setCustomFieldsTemplates($customFieldTemplateManager->createCustomFieldsTemplates($deviceTypeInput));
            $customFieldTemplateManager->save($deviceType);

            $em->commit();

        } catch (\Exception $e) {
            $em->rollback();
            return $this->view([], 400);
        }

        return $this->view([], 204);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Add total repair pricing request",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when message not found"
     *   })
     *
     * Description: Add total repair pricing request.
     *
     * @Security("is_granted('ROLE_WORKER')")
     *
     * @RequestParam(name="message", nullable=true, description="Additional message")
     * @RequestParam(name="appendMessageToEmail", nullable=true, requirements="[0-1]", description="Append additional message to email")
     *
     * @Rest\Post("/repairs/{id}/total-pricing", name="add_total_repair_pricing_request", requirements={"id": "\d+"})
     * @param ParamFetcher $paramFetcher
     * @param Repair $repair
     * @return Response
     */
    public function addWorkerTotalRepairPricingRequestAction(ParamFetcher $paramFetcher, Repair $repair)
    {
        $inputMessage = $paramFetcher->get('message');
        $appendMessageToConfirmEmail = $paramFetcher->get('appendMessageToEmail');
        /** @var User $worker */
        $worker = $this->getUser();

        $repairManager = $this->get('repair_manager');

        if (!$this->get('user_manager')->hasWorkerAccessToRepair($worker, $repair)) {
            throw new AccessDeniedHttpException();
        }

        if ($repairManager->isCurrentTotalRepairPricingAlreadyRequested($repair)) {
            throw new BadRequestHttpException('Total pricing already requested.');
        }

        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();

        try {
            $totalRepairPricing = $repairManager->makeTotalRepairPricingRequest($repair, $worker);
            $repairManager->changeRepairStatus($repair, $repairManager->getStatusById(Status::STATUS_WAITING_FOR_ACCEPTATION), $worker);

            if ($inputMessage) {
                $this->denyAccessUnlessGranted('ROLE_PERMISSION_PUBLIC_MESSAGES');
                $message = $this->get('communication_manager')->sendPublicMessage($worker, $repair, $inputMessage);
                $this->get('notification_manager')->addNewMessageNotifications($message, $worker);
            } else {
                $appendMessageToConfirmEmail = false;
            }

            if ($repair->getUser()->getEmail()) {
                $emailAdditionalMessage = $appendMessageToConfirmEmail ? $inputMessage : null;
                $this->get('email_manager')->sendStatusWaitingForAcceptationEmail($totalRepairPricing, $emailAdditionalMessage);
            }

            $em->commit();

        } catch (\Exception $e) {
            $em->rollback();
            return $this->view([], 400);
        }

        return $this->view([], 204);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Set repair pricing response",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when message not found"
     *   })
     *
     * Description: Set repair pricing response.
     *
     * @Security("is_granted('ROLE_USER')")
     *
     * @Rest\Patch("/repairs/total-pricing/{pricing}/method/{responseMethod}/status/{pricingStatus}", name="total_repair_pricing_response", requirements={"id": "\d+"})
     *
     * @ParamConverter(name="pricing", class="AppBundle:TotalRepairPricing")     *
     * @ParamConverter(name="responseMethod", class="AppBundle:TotalRepairPricingResponseMethod", options={"mapping": {"responseMethod": "type"}})     *
     * @ParamConverter(name="pricingStatus", class="AppBundle:TotalRepairPricingStatus", options={"mapping": {"pricingStatus": "type"}})
     *
     * @param TotalRepairPricing $pricing
     * @param TotalRepairPricingResponseMethod $responseMethod
     * @param TotalRepairPricingStatus $pricingStatus
     * @return Response
     */
    public function setTotalRepairPricingResponseAction(TotalRepairPricing $pricing,
                                                        TotalRepairPricingResponseMethod $responseMethod,
                                                        TotalRepairPricingStatus $pricingStatus
    )
    {
        /** @var User $user */
        $user = $this->getUser();
        /** @var Repair $repair */
        $repair = $pricing->getRepair();

        $repairManager = $this->get('repair_manager');
        $emailManager = $this->get('email_manager');

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_WORKER')) {
            if ($user !== $pricing->getRepair()->getUser()) {
                throw new AccessDeniedHttpException();
            }
        } else {
            if (!$this->get('user_manager')->hasWorkerAccessToRepair($user, $repair)) {
                throw new AccessDeniedHttpException();
            }
        }
        if ($pricing->getStatus()->getId() === TotalRepairPricingStatus::TYPE_WAITING_FOR_ACCEPTATION) {
            throw new BadRequestHttpException('Status is not available.');
        }
        if ($repairManager->getLastTotalRepairPricing($repair) !== $pricing) {
            throw new BadRequestHttpException('This is not last repair pricing.');
        }

        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();

        try {
            $repairManager->processRepairTotalPricingResponse($pricing, $responseMethod, $pricingStatus, $user);

            if ($repair->getUser()->getEmail()) {
                if ($pricingStatus->getType() === TotalRepairPricingStatus::TYPE_ACCEPTED) {
                    $emailManager->sendStatusAcceptedEmail($pricing);
                } elseif ($pricingStatus->getType() === TotalRepairPricingStatus::TYPE_REJECTED) {
//                 todo
                }
            }

            $em->commit();

        } catch (\Exception $e) {
            $em->rollback();
            return $this->view([], 400);
        }

        return $this->view([], 204);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Repair pricing acceptation - using email button.",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when message not found"
     *   })
     *
     * Description: Repair pricing - using email button.
     *
     * @Rest\Get("/repairs/total-pricing/{pricing}/email-acceptation-method/{responseMethod}/{hash}", name="total_repair_pricing_acceptation_using_email")
     *
     * @ParamConverter(name="pricing", class="AppBundle:TotalRepairPricing")
     * @ParamConverter(name="responseMethod", class="AppBundle:TotalRepairPricingResponseMethod", options={"mapping": {"responseMethod": "type"}})
     *
     * @param TotalRepairPricing $pricing
     * @param TotalRepairPricingResponseMethod $responseMethod
     * @param $hash
     * @return Response
     */
    public function acceptTotalRepairPricingUsingEmailAction(TotalRepairPricing $pricing, TotalRepairPricingResponseMethod $responseMethod, $hash)
    {
        /** @var User $user */
        $user = $pricing->getRepair()->getUser();
        /** @var Repair $repair */
        $repair = $pricing->getRepair();

        $repairManager = $this->get('repair_manager');

        $pricing->setMethod($responseMethod);

        if (!$repairManager->checkTotalRepairPricingHash($user, $pricing, $hash)) {
            throw new AccessDeniedHttpException('Wrong hash');
        }

        if ($repairManager->getLastTotalRepairPricing($repair) !== $pricing) {
            throw new BadRequestHttpException('This is not last repair pricing.');
        }

        if ($pricing->getStatus()->getId() === TotalRepairPricingStatus::TYPE_ACCEPTED) {
            return $this->redirectToRoute('pricing_already_accepted');
        }

        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();

        try {
            $totalRepairPricingStatusAccepted = $repairManager->getTotalRepairPricingStatusByType(TotalRepairPricingStatus::TYPE_ACCEPTED);
            $repairManager->processRepairTotalPricingResponse($pricing, $responseMethod, $totalRepairPricingStatusAccepted, $user);

            if ($repair->getUser()->getEmail()) {
                $this->get('email_manager')->sendStatusAcceptedEmail($pricing);
            }

            $em->commit();

        } catch (\Exception $e) {
            $em->rollback();
            return $this->view([], 400);
        }

        return $this->redirectToRoute('pricing_accepted_email');
    }

    /**
     *
     * @ApiDoc(
     *   description = "Set notification read",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when message not found"
     *   })
     *
     * Description: Set notification read.
     *
     * @Security("is_granted('ROLE_USER')")
     *
     * @Rest\Patch("/notifications/{id}/read", name="read_notification", requirements={"id": "\d+"})
     * @param Notification $notification
     * @return Response
     */
    public function setNotificationReadAction(Notification $notification)
    {
        if ($notification->getUser() !== $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $notification->setRead(true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($notification);
        $em->flush();

        return $this->view([], 204);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Set repair cost approved",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     403 = "Returned when unauthorized"
     *   }
     * )
     *
     * Description: Set repair cost approved.
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @Rest\Patch("/repair/approved/{id}", requirements={"id": "\d+"}, name="repair_approved")
     * @param Repair $repair
     * @return Response
     */
    public function setRepairCostApprovedAction(Repair $repair)
    {
        $repair->setApproved(true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($repair);
        $em->flush();

        return $this->view([], 204);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Set repair cost not approved",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     403 = "Returned when unauthorized"
     *   }
     * )
     *
     * Description: Set repair cost not approved.
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @Rest\Patch("/repair/not-approved/{id}", requirements={"id": "\d+"}, name="repair_not_approved")
     * @param Repair $repair
     * @return Response
     */
    public function setRepairCostNotApprovedAction(Repair $repair)
    {
        $repair->setApproved(false);

        $em = $this->getDoctrine()->getManager();
        $em->persist($repair);
        $em->flush();

        return $this->view([], 204);
    }

    /**
     * @ApiDoc(
     *   description = "Create payment method",
     *   statusCodes = {
     *     201 = "Returned when successful",
     *     400 = "Returned when name is invalid",
     *     403 = "Returned when unauthorized"
     *   },
     * filters={
     *      {"name"="name", "dataType"="string", "pattern"="min length: 2, max length 25"}
     *  }
     * )
     *
     * Description: Create payment method.
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @RequestParam(
     *      name="name",
     *      allowBlank=false,
     *      nullable=false,
     *      strict=true,
     *      requirements=@Assert\Length(min = 2, max = 25),
     *      description="Payment method name."
     * )
     *
     * @Rest\Post("/payment-method", name="create_payment_method")
     * @param ParamFetcher $paramFetcher
     * @return Response
     */
    public function createPaymentMethodAction(ParamFetcher $paramFetcher)
    {
        $name = $paramFetcher->get('name');

        $saleManager = $this->get('sale_manager');
        $paymentMethod = $saleManager->createPaymentMethod($name);
        $saleManager->save($paymentMethod);

        return $this->view($paymentMethod, 201);
    }


    /**
     *
     * @ApiDoc(
     *   description = "Create repair cost kind",
     *   statusCodes = {
     *     201 = "Returned when successful",
     *     400 = "Returned when name or type is invalid",
     *     403 = "Returned when unauthorized"
     *   },
     * filters={
     *      {"name"="name", "dataType"="string", "pattern"="min length: 2, max length 25"},
     *      {"name"="type", "dataType"="integer", "pattern"="[1 (when customer paid) -2 (when company paid)]"}
     *  }
     * )
     *
     * Description: Create repair cost kind.
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @RequestParam(
     *      name="name",
     *      allowBlank=false,
     *      nullable=false,
     *      strict=true,
     *      requirements=@Assert\Length(min = 2, max = 25),
     *      description="Sale cost kind name."
     * )
     *
     * @RequestParam(
     *      name="type",
     *      allowBlank=false,
     *      nullable=false,
     *      strict=true,
     *      requirements="[1-2]",
     *      description="Sale cost kind type."
     * )
     *
     * @Rest\Post("/repair-cost-kind", name="create_repair_cost_kind")
     * @param ParamFetcher $paramFetcher
     * @return Response
     */
    public function createRepairCostKindAction(ParamFetcher $paramFetcher)
    {
        $name = $paramFetcher->get('name');
        $type = $paramFetcher->get('type');

        $repairManager = $this->get('repair_manager');
        $repairCostKind = $repairManager->createRepairCostKind($name, $type);
        $repairManager->save($repairCostKind);

        return $this->view($repairCostKind, 201);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Remove repair cost kind",
     *   statusCodes = {
     *     204 = "Returned when deleted",
     *     400 = "Returned when id is invalid or used",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when not found"
     *   },
     * filters={
     *      {"name"="id", "dataType"="integer", "pattern"="\d+"}
     *  }
     * )
     *
     * Description: Remove repair cost kind.
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @ParamConverter(name="id", class="AppBundle:RepairCostKind")
     *
     * @Rest\Delete("/repair-cost-kind/{id}", name="remove_repair_cost_kind")
     * @param RepairCostKind $repairCostKind
     * @return Response
     */
    public function removeRepairCostKindAction(RepairCostKind $repairCostKind)
    {
        $repairManager = $this->get('repair_manager');
        try {
            $repairManager->remove($repairCostKind);
        } catch (Exception $e) {
            $view = $this->view([], 400);
            return $view;
        }

        $view = $this->view([], 204);
        return $view;
    }


    /**
     *
     * @ApiDoc(
     *   description = "Remove payment method",
     *   statusCodes = {
     *     204 = "Returned when deleted",
     *     400 = "Returned when id is invalid or used",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when not found"
     *   },
     * filters={
     *      {"name"="id", "dataType"="integer", "pattern"="\d+"}
     *  }
     * )
     *
     * Description: Remove payment method.
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @ParamConverter(name="id", class="AppBundle:PaymentMethod")
     *
     * @Rest\Delete("/payment-method/{id}", name="remove_payment_method")
     * @param PaymentMethod $paymentMethod
     * @return Response
     */
    public function removePaymentMethodAction(PaymentMethod $paymentMethod)
    {
        $saleManager = $this->get('sale_manager');
        try {
            $saleManager->remove($paymentMethod);
        } catch (Exception $e) {
            $view = $this->view([], 400);
            return $view;
        }

        $view = $this->view([], 204);
        return $view;
    }


    /**
     * @ApiDoc(
     *   description = "Set repair status",
     *   statusCodes = {
     *     200 = "Returned when changed",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when repair or status is invalid"
     *   })
     *
     * Description: Set repair status.
     *
     * @Security("is_granted('ROLE_WORKER')")
     *
     * @ParamConverter(name="repair", class="AppBundle:Repair")
     * @ParamConverter(name="status", class="AppBundle:Status")
     *
     * @RequestParam(name="message", nullable=true, description="Additional message")
     * @RequestParam(name="appendMessageToEmail", nullable=true, requirements="[0-1]", description="Append additional message to email")
     *
     * @Rest\Patch("/repair/{repair}/status/{status}", name="set_repair_status")
     *
     * @param Repair $repair
     * @param Status $status
     * @param ParamFetcher $paramFetcher
     * @return \FOS\RestBundle\View\View
     */
    public function setRepairStatusAction(Repair $repair, Status $status, ParamFetcher $paramFetcher)
    {
        $repairManager = $this->get('repair_manager');
        $emailManager = $this->get('email_manager');

        $inputMessage = $paramFetcher->get('message');
        $appendMessageToConfirmEmail = $paramFetcher->get('appendMessageToEmail');

        /** @var User $worker */
        $worker = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();
        try {
            if ($status->getId() === Status::STATUS_RETURNED) {
                $repairManager->endRepair($repair, $worker);
            } else {
                if ($repair->getApproved()) {
                    $repair->setApproved(false);
                }
                if (!$repair->getOpinion() && $repair->getAddOpinionFlag()) {
                    $repair->setAddOpinionFlag(false);
                }
            }

            if ($status->getId() === Status::STATUS_WAITING_FOR_ACCEPTATION) {
                $totalRepairPricing = $repairManager->makeTotalRepairPricingRequest($repair, $worker);
            }
            $repairManager->changeRepairStatus($repair, $status, $worker);

            if ($inputMessage) {
                $this->denyAccessUnlessGranted('ROLE_PERMISSION_PUBLIC_MESSAGES');
                $message = $this->get('communication_manager')->sendPublicMessage($worker, $repair, $inputMessage);
                $this->get('notification_manager')->addNewMessageNotifications($message, $worker);
            } else {
                $appendMessageToConfirmEmail = false;
            }

            if ($repair->getUser()->getEmail()) {
                $emailManager->sendMail(
                    $repair->getUser()->getEmail(),
                    $emailManager->setSubjectByStatusId($status->getId()),
                    [
                        'repair' => $repair,
                        'additionalMessage' => $appendMessageToConfirmEmail ? $inputMessage : null,
                        'totalRepairPricing' => isset($totalRepairPricing) ? $totalRepairPricing : null
                    ],
                    $emailManager->setTemplateByStatusId($status->getId()));
                $response = ['emailSended' => true];
            } else {
                $response = ['emailSended' => false];
            }
            $em->commit();

        } catch (\Exception $e) {
            $em->rollback();
            return $this->view([], 403);
        }

        return $this->view($response, 200);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Change repair start localization",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     400 = "Returned when amount is invalid",
     *     403 = "Returned when unauthorized"
     *   })
     *
     * Description: Change repair start localization.
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @Rest\Patch("/localizations/{localization}/repair/{repair}", name="edit_repair_start_localization")
     * @param Repair $repair
     * @param Localization $localization
     * @return Response
     */
    public function updateRepairStartLocalizationAction(Repair $repair, Localization $localization)
    {
        $repairManager = $this->get('repair_manager');

        /** @var User $user */
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();

        try {
            if ($repair->getCurrentRepairer() !== $user) {
                $repairManager->changeRepairer($repair, $user);
            }

            $repair->setStartLocalization($localization);
            $repairManager->save($repair);

            $em->commit();
        } catch (\Exception $e) {
            $em->rollback();
        }

        return $this->view([], 204);

    }

    /**
     *
     * @ApiDoc(
     *   description = "Change repair cost localization",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     400 = "Returned when amount is invalid",
     *     403 = "Returned when unauthorized"
     *   })
     *
     * Description: Change repair cost localization.
     *
     * @Security("is_granted('ROLE_SUPER_ADMIN')")
     *
     * @Rest\Patch("/localizations/{localization}/repair-cost/{repairCost}", name="edit_repair_cost_localization")
     * @param RepairCost $repairCost
     * @param Localization $localization
     * @return Response
     */
    public function updateRepairCostLocalizationAction(RepairCost $repairCost, Localization $localization)
    {
        $repairCost->setLocalization($localization);

        $em = $this->getDoctrine()->getManager();
        $em->persist($repairCost);
        $em->flush();

        return $this->view([], 204);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Change repairer",
     *   statusCodes = {
     *     204 = "Returned when changed",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when invalid request"
     *   })
     *
     * Description: Change repairer.
     *
     * @Security("is_granted('ROLE_PERMISSION_CHANGE_REPAIRER')")
     *
     * @ParamConverter(name="repair", class="AppBundle:Repair")
     * @ParamConverter(name="newRepairer", class="AppBundle:User")
     *
     * @RequestParam(name="repair", allowBlank=false, nullable=false, strict=true, requirements="\d+", description="Repair")
     * @RequestParam(name="message", nullable=true, description="Additional message")
     * @RequestParam(name="newRepairer", allowBlank=false, nullable=false, strict=true, requirements="\d+", description="New repairer")
     *
     * @Rest\Patch("/repair/{repair}/new-repairer/{newRepairer}", name="change-repairer")
     * @param Repair $repair
     * @param User $newRepairer
     * @param ParamFetcher $paramFetcher
     * @return \FOS\RestBundle\View\View
     */
    public function changeRepairerAction(Repair $repair, User $newRepairer, ParamFetcher $paramFetcher)
    {
        $additionalMessage = $paramFetcher->get('message');

        /** @var User $worker */
        $worker = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();

        try {
            $this->get('repair_manager')->changeRepairer($repair, $newRepairer, $worker);

            if ($additionalMessage) {
                $privateRepairerMessage = new Message();
                $privateRepairerMessage->setContent($additionalMessage);
                $message = $this->get('communication_manager')->sendMessage($worker, $repair, $privateRepairerMessage);
                $this->get('notification_manager')->addNewMessageNotifications($message, $worker);
            }

            $this->get('email_manager')->sendMail(
                $newRepairer->getEmail(),
                $worker->getLocalization()->getCompany()->getEmailSubjectBegin() . ' ' . $this->get('translator')->trans('emailWorkerAssignation'),
                [
                    'repair' => $repair,
                    'user' => $this->getUser(),
                    'additionalMessage' => isset($privateRepairerMessage) ? $additionalMessage : null
                ],
                'AppBundle:Emails:repairToWorkerAssignation.html.twig'
            );
            $em->commit();
        } catch (\Exception $e) {
            $em->rollback();
        }

        return $this->view([], 204);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Edit repair payment method",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     400 = "Returned when amount is invalid",
     *     403 = "Returned when unauthorized"
     *   })
     *
     * @RequestParam(name="paymentMethodSelect", allowBlank=false, nullable=false, strict=true, requirements="\d+", description="Repair payment method")
     *
     * Description: Edit repair payment method.
     *
     * @Security("is_granted('ROLE_WORKER')")
     *
     * @Rest\Patch("/repair/{id}/payment-method", name="edit_repair_payment_method")
     * @param ParamFetcher $paramFetcher
     * @param Repair $repair
     * @throws AccessDeniedHttpException
     * @return Response
     */
    public function editRepairPaymentMethodAction(ParamFetcher $paramFetcher, Repair $repair)
    {
        $paymentMethodSelect = $paramFetcher->get('paymentMethodSelect');
        /** @var User $worker */
        $worker = $this->getUser();

        if (!$this->get('user_manager')->hasWorkerAccessToRepair($worker, $repair) ||
            (!$worker->hasRole('ROLE_SUPER_ADMIN') && $repair->getCurrentStatus() === Status::STATUS_RETURNED)
        ) {
            throw new AccessDeniedHttpException();
        }

        $repair->setPaymentMethod($this->get('sale_manager')->getPaymentMethodById($paymentMethodSelect));
        $this->get('repair_manager')->save($repair);

        return $this->view([], 204);
    }

    /**
     * @ApiDoc(
     *   description = "Get worker order history",
     *   statusCodes = {
     *     200 = "Returned when success",
     *     400 = "Returned when order id is invalid",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when not found"
     *   })
     *
     * Description: Get worker order history.
     *
     * @Security("is_granted('ROLE_WORKER')")
     *
     * @ParamConverter(name="workerOrder", class="AppBundle:WorkerOrder")
     *
     * @Rest\GET("/worker-order/history/{id}", name="get_worker_order")
     * @param WorkerOrder $workerOrder
     * @return \FOS\RestBundle\View\View
     * @internal param SaleCostKind $saleCostKind
     */
    public function getWorkerOrderHistoryAction(WorkerOrder $workerOrder)
    {
        $serializer = $this->get('serializer');

        $workerOrderChangelog = $this->get('changelog_manager')->getChangelog($workerOrder);

        $response = $serializer->serialize($workerOrderChangelog, 'json', SerializationContext::create()->enableMaxDepthChecks());

        return $this->view($response, 200);
    }

    /**
     * @ApiDoc(
     *   description = "Set worker order status",
     *   statusCodes = {
     *     204 = "Returned when changed",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when worker order or status is invalid"
     *   })
     *
     * Description: Set worker order status.
     *
     * @Security("is_granted('ROLE_WORKER')")
     *
     * @ParamConverter(name="workerOrder", class="AppBundle:WorkerOrder")
     * @ParamConverter(name="workerOrderStatus", class="AppBundle:WorkerOrderStatus")
     *
     * @Rest\Patch("/worker-order/{workerOrder}/status/{workerOrderStatus}", name="set_worker_order_status")
     * @param WorkerOrder $workerOrder
     * @param WorkerOrderStatus $workerOrderStatus
     * @return \FOS\RestBundle\View\View
     */
    public function setWorkerOrderStatusAction(WorkerOrder $workerOrder, WorkerOrderStatus $workerOrderStatus)
    {
        $workerOrder->setStatus($workerOrderStatus);

        $em = $this->getDoctrine()->getManager();
        $em->persist($workerOrder);
        $em->flush();

        return $this->view([], 204);
    }

    /**
     * @ApiDoc(
     *   description = "Update worker order content",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     400 = "Returned when form is invalid",
     *     403 = "Returned when unauthorized"
     *   }
     * )
     *
     * Description: Update worker odrer content.
     *
     * @Security("is_granted('ROLE_WORKER')")
     *
     * @ParamConverter(name="workerOrder", class="AppBundle:WorkerOrder")
     *
     * @RequestParam(name="modalOrderDescription", allowBlank=false, nullable=false, strict=true, requirements=@Assert\Length(min = 2), description="Worker order description")
     * @RequestParam(name="modalOrderHref", nullable=true, requirements=@Assert\Url(), description="Worker order href")
     *
     * @Rest\Patch("/worker-order/{workerOrder}/content", name="update_worker_order_content")
     * @param ParamFetcher $paramFetcher
     * @param WorkerOrder $workerOrder
     * @return Response
     */
    public function updateWorkerOrderContentAction(ParamFetcher $paramFetcher, WorkerOrder $workerOrder)
    {

        $workerOrder->setDescription($paramFetcher->get('modalOrderDescription'));
        $workerOrder->setHref($paramFetcher->get('modalOrderHref'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($workerOrder);
        $em->flush();

        return $this->view([], 204);
    }

    /**
     *
     * @ApiDoc(
     *   description = "Remove worker order",
     *   statusCodes = {
     *     204 = "Returned when deleted",
     *     400 = "Returned when invalid id",
     *     403 = "Returned when unauthorized",
     *     404 = "Returned when not found"
     *   }
     * )
     *
     * Description: Remove worker order.
     *
     * @Security("is_granted('ROLE_WORKER')")
     *
     * @ParamConverter(name="id", class="AppBundle:WorkerOrder")
     *
     * @Rest\Delete("/worker-order/{id}", name="remove_worker_order")
     * @param WorkerOrder $workerOrder
     * @return Response
     * @internal param RepairCostKind $repairCostKind
     */
    public function removeWorkerOrderAction(WorkerOrder $workerOrder)
    {
        $workerOrder->setVisible(false);

        $em = $this->getDoctrine()->getManager();
        $em->persist($workerOrder);
        $em->flush();

        return $this->view([], 204);
    }
}