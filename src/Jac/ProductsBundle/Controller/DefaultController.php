<?php

namespace Jac\ProductsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JacProductsBundle:Default:index.html.twig', array('name' => $name));
    }
}