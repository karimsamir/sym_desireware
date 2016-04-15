<?php

namespace Desireware\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DesirewareProductBundle:Default:index.html.twig');
    }
}
