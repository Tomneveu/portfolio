<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Twig\Extension\TranslationExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\Translation\Loader\XliffFileLoader;
use Symfony\Component\Translation\Translator;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastName', TextType::class, [
                'label' => 'form.contact.lastName.label'
            ])
            ->add('firstName', TextType::class, [
                'label' => 'form.contact.firstName.label'
            ])
            ->add('email', EmailType::class, [
                'label' => 'form.contact.email.label'
            ])
            ->add('message', TextareaType::class, [
                'label' => 'form.contact.message.label'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'form.contact.submit.label'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
