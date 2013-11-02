<?php
namespace Jac\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Jac\ContactBundle\Entity\Contact;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('companyName', 'text', array('label' => 'Empresa'))
            ->add('fullName', 'text', array('label' => 'Nombre'))
            ->add('position', 'text', array('label' => 'Cargo/Posición'))
            ->add('address', 'text', array('label' => 'Dirección'))
            ->add('phoneNumber', 'text', array('label' => 'Teléfono'))
            ->add('faxNumber', 'text', array('label' => 'Fax'))
            ->add('emailAddress', 'text', array('label' => 'Correo Electrónico'))
            ->add('whereDidYouLearnAboutUs', 'text', array('label' => '¿Cómo nos conoció?'))
            ->add('comments', 'textarea', array('label' => 'Comentarios'))
            ->getForm();

        if ($request->isMethod('POST'))
        {
            $form->bind($request);
        }

        return $this->render('JacContactBundle:Default:index.html.twig',
                             array('form' => $form->createView()));
    }
}