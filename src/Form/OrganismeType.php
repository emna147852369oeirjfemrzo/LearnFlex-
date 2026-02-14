<?php
namespace App\Form;

use App\Entity\Organisme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;



class OrganismeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
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
            ->add('nom', TextType::class)
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Faculté publique' => 'publique',
                    'Faculté privée' => 'privee',
                    'Société' => 'societe',
                ]
            ])
            ->add('description', TextareaType::class)
            ->add('siteweb', TextType::class)
            ->add('email', TextType::class)
            ->add('telephone', TextType::class)
            ->add('ville', TextType::class)
            ->add('actif', CheckboxType::class, ['required' => false])
            ->add('fraismin', NumberType::class)
            ->add('langue', ChoiceType::class, [
                'choices' => ['FR' => 'FR', 'AR' => 'AR', 'EN' => 'EN']
            ])
            ->add('opportunitesstage', CheckboxType::class, ['required' => false])
            ->add('opportunitesemploi', CheckboxType::class, ['required' => false]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Organisme::class,
            
        ]);
    }
}
