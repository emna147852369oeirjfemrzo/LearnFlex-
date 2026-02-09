<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* back/communication/CommunicationSearchType.html.twig */
class __TwigTemplate_a9673e1477432ad2301f78ee8b99d2fa extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace App\\Form;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;

class CommunicationSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder
            ->add('keyword', TextType::class, [
                'label' => 'Mot-clé',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Rechercher par description, lien...',
                    'class' => 'form-control'
                ]
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'required' => false,
                'choices' => [
                    'Tous les types' => '',
                    'En direct' => 'live',
                    'Enregistré' => 'record'
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'État',
                'required' => false,
                'choices' => [
                    'Tous les états' => '',
                    'Planifié' => 'planifie',
                    'En cours' => 'en_cours',
                    'Terminé' => 'termine',
                    'Annulé' => 'annule'
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('dateFrom', DateType::class, [
                'label' => 'Du',
                'required' => false,
                'widget' => 'single_text',
                'html5' => false,
                'attr' => [
                    'class' => 'form-control datepicker',
                    'placeholder' => 'Date de début'
                ]
            ])
            ->add('dateTo', DateType::class, [
                'label' => 'Au',
                'required' => false,
                'widget' => 'single_text',
                'html5' => false,
                'attr' => [
                    'class' => 'form-control datepicker',
                    'placeholder' => 'Date de fin'
                ]
            ])
            ->add('rechercher', SubmitType::class, [
                'label' => 'Rechercher',
                'attr' => ['class' => 'btn btn-primary']
            ])
            ->add('reset', SubmitType::class, [
                'label' => 'Réinitialiser',
                'attr' => ['class' => 'btn btn-secondary']
            ]);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'method' => 'GET',
            'csrf_protection' => false,
            'data_class' => null,
        ]);
    }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/communication/CommunicationSearchType.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/communication/CommunicationSearchType.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\CommunicationSearchType.html.twig");
    }
}
