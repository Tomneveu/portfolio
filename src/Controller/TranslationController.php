<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TranslationController extends AbstractController
{
    /**
     * @Route("/change_locale/{locale}", name="change_locale")
     */
    public function changeLocale(TranslatorInterface $translator, $locale, Request $request)
    {
        $message = $translator->trans('Your comment is pending approval');

        $request->getSession()->set('_locale', $locale);

        return $this->redirect($request->headers->get('referer'));
    }
}
