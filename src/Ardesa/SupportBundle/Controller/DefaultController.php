<?php

namespace Ardesa\SupportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArdesaSupportBundle:Default:index.html.twig');
    }
}
