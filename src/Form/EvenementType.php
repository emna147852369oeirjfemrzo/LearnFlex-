<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Organisme;

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
                'label' => 'Date et Heure de début',
                'widget' => 'single_text',
            ])
            ->add('datefin', DateTimeType::class, [
                'label' => 'Date et Heure de fin',
                'widget' => 'single_text',
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu'
            ])
            ->add('typeevenement', ChoiceType::class, [
                'label' => 'Type d\'événement',
                'choices' => [
                    'Conférence' => 'conférence',
                    'Atelier' => 'atelier',
                    'Webinaire' => 'webinaire',
                    'Autre' => 'autre'
                ]
            ])
            ->add('capacitemax', NumberType::class, [
                'label' => 'Capacité maximale'
            ])
            ->add('typeevent', TextType::class, [
                'label' => 'Type d\'événement (ex: physique, virtuel)'
            ])
            ->add('heuredebut', DateTimeType::class, [
                'label' => 'Heure de début',
                'widget' => 'single_text',
            ])
            ->add('heurefin', DateTimeType::class, [
                'label' => 'Heure de fin',
                'widget' => 'single_text',
            ])
            ->add('mode', ChoiceType::class, [
                'label' => 'Mode',
                'choices' => [
                    'En ligne' => 'en ligne',
                    'Présentiel' => 'présentiel'
                ]
            ])
            ->add('publiccible', ChoiceType::class, [
    'label' => 'Public cible',
    'choices' => [
        'Bacheliers' => 'bacheliers',
        'Tout le monde' => 'tout le monde',
    ],
    'expanded' => true, // Pour afficher en boutons radio
    'multiple' => false, // Pour sélection unique
    'required' => false,
])
            ->add('domainesconcernes', TextType::class, [
                'label' => 'Domaines concernés'
            ])
            ->add('organisateur', TextType::class, [
                'label' => 'Organisateur'
            ])
            ->add('contactemail', TextType::class, [
                'label' => 'Email de contact'
            ])
            ->add('contacttelephone', TextType::class, [
                'label' => 'Téléphone de contact'
            ])
            ->add('lieninscription', TextType::class, [
                'label' => 'Lien d\'inscription'
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Actif' => 'actif',
                    'Inactif' => 'inactif'
                ]
            ])

->add('organisme', EntityType::class, [
    'class' => Organisme::class,
    'choice_label' => 'nom',
    'label' => 'Organisme',
    'placeholder' => 'Choisir un organisme',
    'required' => true, // Si vous voulez que ce champ soit obligatoire
    'attr' => ['class' => 'custom-class'] // Vous pouvez ajouter une classe CSS personnalisée si nécessaire
])


            ->add('save', SubmitType::class, [
                'label' => 'Ajouter l\'événement'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
