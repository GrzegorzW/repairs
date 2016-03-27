<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends FOSRestController
{
    public function response($obj, $code = 200, array $groups = [])
    {
        $serializer = $this->get('serializer');
        $json = $serializer->serialize($obj, 'json', SerializationContext::create()->setGroups($groups));

        return new Response($json, $code, ['Content-Type' => 'application/json']);
    }
}