<?php

namespace App\Form;

use App\Entity\Devis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            ->add('prenom', TextType::class, [
                'label' => 'Votre prénom',
                'constraints' => [
                    new NotBlank([
                        'message' => 'veuillez renseigner votre prénom',
                    ]),
                ],
            ])
            ->add('nom', TextType::class, [
                'label' => 'Votre nom',
                'constraints' => [
                    new NotBlank([
                        'message' => 'veuillez renseigner votre nom',
                    ]),
                ],
            ])
            ->add('mail', EmailType::class, [
                'label' => 'Votre email',
                'attr' => [
                    'placeholder' => 'paul@auchon.com',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'veuillez renseigner votre email',
                    ]),
                    new Email(),
                ],
            ])
            ->add('nbPersonne', IntegerType::class, [
                'label' => 'Nombre de personne vivant dans le foyer',
                'attr' => [
                    'min' => 1,
                    'max' => 30,
                ],
                'empty_data' => 1,
            ])
            ->add('surfaceLogement', IntegerType::class, [
                'label' => 'La surface du foyer (m2)',
                'attr' => [
                    'min' => 10,
                    'max' => 18000,
                ],
                'empty_data' => 15,
            ])
            ->add('typeLogement', ChoiceType::class, [
                'label' => 'Le type du logement',
                'choices' => [
                    'T1' => 'T1',
                    'T2' => 'T2',
                    'T3' => 'T3',
                    'T4' => 'T4',
                    'T5' => 'T5',
                    'T6' => 'T6',
                    'Studio' => 'Studio',
                    'Duplex' => 'Duplex',
                    'Loft' => 'Loft',
                ],
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
        ]);
    }
}
