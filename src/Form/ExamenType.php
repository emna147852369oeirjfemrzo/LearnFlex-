<?php

namespace App\Form;

use App\Entity\Examen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class ExamenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('matiere')
            ->add('niveauexamen', ChoiceType::class, [
                            'choices' => [
                                'Facile' => 'facile',
                                'Moyen' => 'moyen',
                                'Difficile' => 'difficile',
                            ]
                        ])         
            ->add('datedebut')
            ->add('datefin')
            ->add('duree')
            ->add('nbquestion')
            ->add('scoretotal')
            ->add('coefficient')
            ->add('typeexamen', ChoiceType::class, [
                'choices' => [
                    'Blanc' => 'blanc',
                    'Officiel' => 'officiel',
                    'Entrainement' => 'entrainement',
                ]
            ])
            ->add('etat', ChoiceType::class, [
                            'choices' => [
                                'Planifié' => 'planifie',
                                'Actif' => 'actif',
                                'Terminé' => 'termine',
                                'Annulé' => 'annule',
                            ]
                        ])           
            ->add('datecreation')
            ->add('save',submitType::class)

                    ;
                }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Examen::class,
        ]);
    }
}
