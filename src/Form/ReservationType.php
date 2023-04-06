<?php

namespace App\Form;

use DateTime;
use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ReservationType extends AbstractType
{
    private $authorizationChecker;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->authorizationChecker = $authorizationChecker;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        

        
        $builder
            // ->add('date',TextType::class, $this->getConfiguration("Date d'arrivée", "Veuillez saisir votre date d'arrivée..."
            // ))
            ->add('date', DateTimeType::class,[
                 'widget' => 'single_text',
                 'html5' => false,
                 'format' => 'dd-MM-yyyy',
                'attr' => ['class' => 'js-datepicker'],
                'data'=> new DateTime('now'),
            ])
            ->add('heure', ChoiceType::class, [
                'choices' => $options['available_hours'],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('reservation_name',TextType::class,[
                
                'attr' => [
                    'placeholder' => 'Nom de la réservation ',
                    'class' => 'form-control'
                ]
            ])
            ->add('restaurant_name',ChoiceType::class,[
                'choices'  => [
                    'Paris 17 - Emile Level' => 'Paris 17 - Emile Level',
                    'Paris 14 - Alesia' => 'Paris 14 - Alesia',
                    'Paris 5 - Monge' => 'Paris 5 - Monge',
                ],
                'attr' => [
                    'placeholder' => 'Restaurant à choisir',
                    'class' => 'form-select'
                ]
            ])
            ->add('email', EmailType::class,[
                
                'attr' => [
                    // 'value' => user.email
                    'placeholder' => 'Email',
                    'class' => 'form-control'
                ]
            ])
            ->add('number', ChoiceType::class, [
                'choices' => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                ],
                'attr' => [
                    'label' => 'Nombre de personnes',
                    'placeholder' => 'Nombre de personnes',
                    'class' => 'form-control'
                ]
                ])
            ->add('submit', SubmitType::class,[
                'label' => 'Réservez',
                'attr' => [
                    'class' => 'btn btn-primary'
                    ]
                ]);
                if ($this->authorizationChecker->isGranted('ROLE_ADMIN')) {
                    $builder->add('vip', CheckboxType::class, [
                        'label' => 'VIP?',
                        'required' => false,
                        // 'value' => false,
                        'empty_data' => null, // La valeur par défaut est null
                    ]);
                }
                
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);

        $resolver->setRequired('available_hours');
        $resolver->setAllowedTypes('available_hours', 'array');
    }
    private function getConfiguration($label, $placeholder)
    {
        return [
            'label' => $label,
            'attr' => [
                'placeholder' => $placeholder
            ]
        ];
    }
}
