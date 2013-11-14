<?php

namespace Jac\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JacHomeBundle:Default:index.html.twig');
    }

    public function privacyNoticeAction()
    {
        return $this->render('JacHomeBundle:Default:privacy_notice.html.twig');
    }
}
