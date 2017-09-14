<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use AppBundle\Entity\President;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PresidentUploadType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add("id",TextType::class)
            ->add("name",TextType::class)
            ->add("image",FileType::class,array('data_class' => null,'required'=>false))
            ->add('username')
            ->add("party",ChoiceType::class,[

                'choices'  => array(
                    ''  =>null,
                    'Independent' => 'Independent',
                    'Federalist' => 'Federalist',
                    'Democratic-Republican' => 'Democratic-Republican',
                    'Democratic'=>'Democratic',
                    'Whig'=>'Whig',
                    'Republican'=>'Republican'
                )
            ])
            ->add("color",ChoiceType::class,[
                'choices'  => array(
                    ''  =>null,
                    '#DDDDDD' => '#DDDDDD',
                    '#f4b49c' => '#f4b49c',
                    '#52963c' => '#52963c',
                    '#3986d3'=>'#3986d3',
                    '#ffc20f'=>'#ffc20f',
                    '#ff0000'=>'#ff0000'
                )

            ])
            ->add("vice_president",TextType::class)
            ->add("term",TextType::class)
            ->add('plainPassword',RepeatedType::class,[
                'type'  => PasswordType::class,
                'first_options' => [
                    'label' => 'Password'
                ],
                'second_options' => [
                    'label' => 'Repeat Password'
                ]
            ])
            ->add("Register",SubmitType::class,[
                'attr' => [
                    "class" =>"btn-success btn-lg btn-block"
                ]
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => President::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_president';
    }


}
