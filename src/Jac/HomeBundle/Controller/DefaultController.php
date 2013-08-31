<?php

namespace Jac\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JacHomeBundle:Default:index.html.twig');
    }
}
