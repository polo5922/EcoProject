<?php

namespace App\Form;

use App\Entity\Association;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AssociationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ass_nom', TextType::class, [
                'label' => 'Name : '
            ])
            ->add('ass_code', TextType::class, [
                'label' => 'Code : '
            ])
            ->add('ass_site', TextType::class, [
                'label' => 'Web Site : '
            ])
            ->add('ass_adresse', TextType::class, [
                'label' => 'Adress : '
            ])
            ->add('ass_cp', TextType::class, [
                'label' => 'ZIP Code : '
            ])
            ->add('ass_ville', TextType::class, [
                'label' => 'City : '
            ])
            ->add('ass_description', TextType::class, [
                'label' => 'Description : '
            ])
            ->add('ass_president', TextType::class, [
                'label' => 'President : '
            ])
            ->add('ass_created_at',DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('logo', FileType::class, [
                'mapped'=>false,
                'label'=>'Logo',
                'required'=>false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Merci d\'envoyer votre logo en jpg ou png',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Association::class,
        ]);
    }
}
