<?php

namespace Ardesa\ITBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IT/index.html.twig');
    }
    public function tachesAction()
    {
        return $this->render('IT/taches.html.twig');
    }
}
