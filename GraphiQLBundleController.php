<?php

namespace ammpp\GraphiQL;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GraphiQLBundleController extends AbstractController
{
    const TEMPLATE_NAME = '@graphQL/index.twig';

    public function __construct()
    {
    }

    public function __invoke(Request $request): Response
    {
        return $this->render(self::TEMPLATE_NAME);
    }
}
