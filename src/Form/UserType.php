<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('password',PasswordType::class)
            ->add('companyName')
            ->add('educationLevel')
            ->add('graduationYear')
            ->add('experience')
            ->add('type',ChoiceType::class ,
                [
                'choices'  => [
                    'Part Time' => "Part Time",
                    'Full Time' => "Full Time",
                    'Freelance' => "Freelance",
                    'Internship' => "Internship",
                    'Temporary' => "Temporary",
                            ],
                ])
            ->add('speciality')
            ->add('location')
            ->add( 'submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
