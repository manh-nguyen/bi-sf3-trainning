<?php

namespace AppBundle\Form;

use AppBundle\Entity\President;
use function PHPSTORM_META\type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PresidentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
            ->add("image",FileType::class,array('data_class' => null,'required'=>false))
            ->add('username',TextType::class)
            ->add('password',TextType::class)
            ->add('birthday',DateType::class,[
                'years' => range(date('Y'), date('Y')-100),
            ])
            ->add('death',DateType::class,[
                'years' => range(date('Y'), date('Y')+100),
            ])
            ->add('tookoffice',DateType::class,[
                'years' => range(date('Y'), date('Y')+100),
            ])
            ->add('leftoffice',DateType::class,[
                'years' => range(date('Y'), date('Y')+100),
            ])
            ->add('party')
            ->add('term')
            ->add('vicepresident')
            ->add('color')
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
