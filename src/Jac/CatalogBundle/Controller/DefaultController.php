<?php

namespace Jac\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JacCatalogBundle:Default:index.html.twig');
    }

    public function addCategoryAction()
    {
        return $this->render('JacCatalogBundle:Default:add_category.html.twig');
    }
}
