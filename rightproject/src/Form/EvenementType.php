<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Organisme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre de l\'événement'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description de l\'événement'
            ])
            ->add('datedebut', DateTimeType::class, [
                'label' => 'Date et heure de début',
                'widget' => 'single_text',
            ])
            ->add('datefin', DateTimeType::class, [
                'label' => 'Date et heure de fin',
                'widget' => 'single_text',
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu'
            ])
            ->add('mode', ChoiceType::class, [
                'label' => 'Mode',
                'choices' => [
                    'Présentiel' => 'présentiel',
                    'En ligne' => 'en ligne',
                    'Hybride' => 'hybride'
                ]
            ])
            ->add('capacitemax', IntegerType::class, [
                'label' => 'Capacité maximale'
            ])
            ->add('publiccible', TextType::class, [
                'label' => 'Public cible',
                'required' => false
            ])
            ->add('lieninscription', TextType::class, [
                'label' => 'Lien d\'inscription',
                'required' => false
            ])
            ->add('contactemail', TextType::class, [
                'label' => 'Email de contact',
                'required' => false
            ])
            ->add('contacttelephone', TextType::class, [
                'label' => 'Téléphone de contact',
                'required' => false
            ])
            ->add('organisme', EntityType::class, [
                'class' => Organisme::class,
                'choice_label' => 'nom',
                'label' => 'Organisme',
                'placeholder' => 'Choisir un organisme',
                'required' => true,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer l\'événement'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
