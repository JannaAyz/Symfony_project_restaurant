<?php

namespace App\Form;

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

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        // Chercher un calendrier avec que les dates futures
        ->add('date',TextType::class, $this->getConfiguration("Date d'arrivée", "Veuillez saisir votre date d'arrivée..."
        ))
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
            ->add('number', IntegerType::class,[
                
                'attr' => [
                    'placeholder' => 'Nombre de personnes ',
                    'class' => 'form-control'
                ]
            ])
            ->add('email', EmailType::class,[
                
                'attr' => [
                    // 'value' => user.email
                    'placeholder' => 'Email',
                    'class' => 'form-control'
                ]
            ])
            ->add('submit', SubmitType::class,[
                'label' => 'Réservez',
                'attr' => [
    
                    'class' => 'btn btn-primary'
                    ]
                ]);
        ;
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
