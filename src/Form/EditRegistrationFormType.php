<?php

namespace App\Form;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\DataTransformer\FileToDataTransformer;

class EditRegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('email', EmailType::class, [
            'attr' => [
                'placeholder' => 'Votre email',
                'class' => 'form-control'
            ]
        ])
        ->add('gender', ChoiceType::class, [
            'choices' => [
                'Femme' => 'Femme',
                'Homme' => 'Homme',
                'Autre' => 'Autre',
            ],
            'attr' => [
                'class' => 'form-select'
            ]
        ])
        ->add('lastname', TextType::class, [

            'attr' => [
                'placeholder' => 'Votre nom',
                'class' => 'form-control'
            ]
        ])
        ->add('firstname', TextType::class, [

            'attr' => [
                'placeholder' => 'Votre prénom',
                'class' => 'form-control'
            ]
        ])
        ->add('password', RepeatedType::class, [
            'label' => false,
            'type' => PasswordType::class,
            // 'mapped' => false,
            'attr' => ['autocomplete' => 'new-password',],
            'required' => true,
            'first_options'  => ['label' => 'Password',
                                 'attr'=> [
                                    'class' => 'form-control'
                                 ]
                                 ],
            'second_options' => ['label' => 'Repeat Password',
            'attr'=> [
               'class' => 'form-control'
            ]],
            
        ])
        ->add('phone', TextType::class, [

            'attr' => [
                'placeholder' => 'Votre numéro de téléphone',
                'class' => 'form-control'
            ]
        ])
        ->add('address', TextType::class, [

            'attr' => [
                'placeholder' => 'Votre adresse',
                'class' => 'form-control'
            ]
        ])
        ->add('city', TextType::class, [

            'attr' => [
                'placeholder' => 'Votre ville',
                'class' => 'form-control'
            ]
        ])
        ->add('zipcode', IntegerType::class, [

            'attr' => [
                'placeholder' => 'Votre code postal',
                'class' => 'form-control'
            ]
        ])
        ->add('country', CountryType::class, [

            'attr' => [
                'placeholder' => 'Votre pays',
                'class' => 'form-control'
            ]
        ])
        ->add('imageUrl', FileType::class, [
            'label' => 'Photo de profil',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '1024k',
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png',
                    ],
                    'mimeTypesMessage' => 'Please upload a valid image (JPEG, PNG)',
                ])
            ],
            'attr' => [
                'class' => 'form-control-file',
            ],
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Modifier',
            'attr' => [
                'class' => 'btn btn-primary'
            ]
        ]);
    ;
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
