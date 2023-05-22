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
        // ->add('password', RepeatedType::class, [
        //     'label' => false,
        //     'type' => PasswordType::class,
        //     // 'mapped' => false,
        //     'attr' => ['autocomplete' => 'new-password',],
        //     'required' => true,
        //     'first_options'  => ['label' => 'Mot de passe',
        //                          'attr'=> [
        //                             'class' => 'form-control'
        //                          ]
        //                          ],
        //     'second_options' => ['label' => 'Confirmer',
        //     'attr'=> [
        //        'class' => 'form-control'
        //     ]],
            
        // ])
        
        ->add('password', PasswordType::class, [
            'label' => 'Mot de passe',
            'attr' => [
                'class' => 'form-control',
                'autocomplete' => 'jesuisadmin',
            ],
            'required' => true, // ou 'required' => false
            'data' => 'jesuisadmin', // pour que le champ soit vide lors de l'affichage
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

}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
