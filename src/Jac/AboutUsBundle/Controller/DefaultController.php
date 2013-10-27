<?php
namespace Jac\AboutUsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JacAboutUsBundle:Default:index.html.twig');
    }


}