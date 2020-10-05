<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(\Swift_Mailer $mailer, Request $request)
    {
        $contactForm = $this->createForm(ContactType::class);
        $contactForm->handleRequest($request);

        if($contactForm->isSubmitted() && $contactForm->isValid()){
            $infos = $contactForm->getData();
            $mail = (new \Swift_Message('Portfolio - contact me'))
                ->setFrom($infos['email'])
                ->setTo('tneveu91@gmail.com')
                ->setBody(
                    $this->renderView(
                        'contact/email.html.twig', [
                            'lastName' => $infos['lastName'],
                            'firstName' => $infos['firstName'],
                            'email' => $infos['email'],
                            'message' => $infos['message']
                        ],
                        'text/html'
                    )
                );
            $mailer->send($mail);
            $this->addFlash(
                'success',
                'Your message has been sent'
            );
            return $this->redirectToRoute('home');
        }

        return $this->render('contact/index.html.twig', [
            'contactForm' => $contactForm->createView(),
        ]);
    }
}
