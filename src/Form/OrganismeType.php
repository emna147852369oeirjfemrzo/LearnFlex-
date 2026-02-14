<?php

namespace App\Form;

use App\Entity\Organisme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class OrganismeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('photoFile', FileType::class, [
                'label' => 'Photo / Logo',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez envoyer une image (JPEG, PNG, GIF ou WebP).',
                    ]),
                ],
            ])
            ->add('nom')
            ->add('typesponsor')
            ->add('description')
            ->add('siteweb')
            ->add('emailcontact')
            ->add('telephone')
            ->add('localisation')
            ->add('statut')
            ->add('typefaculte')
            ->add('domainesformation')
            ->add('fraisetude')
            ->add('dureeetudes')
            ->add('langueenseignement')
            ->add('secteuractivite')
            ->add('tailleentreprise')
            ->add('opportunitesstage')
            ->add('opportunitesemploi')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Organisme::class,
        ]);
    }
}
