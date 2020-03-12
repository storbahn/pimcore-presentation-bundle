<?php

namespace Neusta\Pimcore\PresentationBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * @Route("/presentation")
     */
    public function indexAction(Request $request)
    {
        return new Response('Hello world from presentation');
    }
}
