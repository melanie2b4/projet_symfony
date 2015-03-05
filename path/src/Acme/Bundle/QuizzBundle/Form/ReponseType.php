<?php

namespace Acme\Bundle\QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleReponse', 'text', array(
    'label'  => ' ',
    'attr' => array(
        'placeholder' => 'Reponse',
        'class' => 'addReponse'
    )
))
            ->add('isTrue', 'checkbox', array(
    'label'     => ' ',
    'required'  => false,
))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\Bundle\QuizzBundle\Entity\Reponse'
        ));
    }

    public function getName()
    {
        return 'Reponse';
    }
}
