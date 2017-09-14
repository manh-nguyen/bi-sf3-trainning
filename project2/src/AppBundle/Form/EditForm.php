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
class EditForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('president_code', TextType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('password', PasswordType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('image', FileType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('birthday', DateType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('death', DateType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('took_office', DateType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('left_office', DateType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('party', TextType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('party_color', TextType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('term', IntegerType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->add('vice_president', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'vice President'),'data_class' => null))
            ->add('Edit', SubmitType::class, array('attr' => array('class' => 'form-control', 'style' => 'background-color:black;color:white;')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\president_user',

        ]);
    }
}