<?php
namespace Jac\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Jac\ContactBundle\Entity\Contact;


class DefaultController extends Controller
{
    private function buildMailMessage(Contact $contact)
    {
        return $this->renderView('JacContactBundle:Default:mail_message.html.twig',
                                 array('contact' => $contact));
    }

    public function indexAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('companyName', 'text', array(
                'label'    => 'Empresa',
                'required' => false)
            )
            ->add('fullName', 'text', array(
                'label'    => 'Nombre',
                'required' => false)
            )
            ->add('position', 'text', array(
                'label'    => 'Cargo/Posición',
                'required' => false)
            )
            ->add('address', 'text', array(
                'label'    => 'Dirección',
                'required' => false)
            )
            ->add('phoneNumber', 'text', array(
                'label'    => 'Teléfono',
                'required' => false)
            )
            ->add('faxNumber', 'text', array(
                'label'    => 'Fax',
                'required' => false)
            )
            ->add('emailAddress', 'text', array(
                'label'    => 'Correo Electrónico',
                'required' => false)
            )
            ->add('whereDidYouLearnAboutUs', 'text', array(
                'label'    => '¿Cómo nos conoció?',
                'required' => false)
            )
            ->add('comments', 'textarea', array(
                'label'    => 'Comentarios',
                'required' => false)
            )
            ->getForm();

        if ($request->isMethod('POST'))
        {
            // Send mail message.
            $form->submit($request);
            $message = $this->buildMailMessage($form->getData());

            // Redirect to confirmation page.
            $url = $this->generateUrl('jac_contact_confirmation');
            return $this->redirect($url);
        }

        return $this->render('JacContactBundle:Default:index.html.twig',
                             array('form' => $form->createView()));
    }

    public function confirmationAction()
    {
        return $this->render('JacContactBundle:Default:confirmation.html.twig');
    }
}
