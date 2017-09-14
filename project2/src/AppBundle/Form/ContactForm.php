<?php
namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class ContactForm extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
           ->add('name',TextType::class,array('attr'=>array('class'=>'form-control')))
           ->add('president_code',TextType::class,array('attr'=>array('class'=>'form-control')))
           ->add('password',PasswordType::class,array('attr'=>array('class'=>'form-control')))
           ->add('image',FileType::class,array('attr'=>array('class'=>'form-control')))
           ->add('birthday',DateType::class,array('attr'=>array('class'=>'form-control')))
           ->add('death',DateType::class ,array('attr'=>array('class'=>'form-control')))
           ->add('took_office',DateType::class,array('attr'=>array('class'=>'form-control')) )
           ->add('left_office',DateType::class,array('attr'=>array('class'=>'form-control')))
           ->add('party',TextType::class,array('attr'=>array('class'=>'form-control')))
           ->add('party_color',TextType::class,array('attr'=>array('class'=>'form-control')))
           ->add('term',IntegerType::class,array('attr'=>array('class'=>'form-control')))
           ->add('vice_president',TextType::class,array('attr'=>array('class'=>'form-control','placeholder'=>'vice President')))
           ->add('Register',SubmitType::class,array('attr'=>array('class'=>'form-control','style'=>'background-color:black;color:white;')));
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\president_user',
        ]);
    }
}