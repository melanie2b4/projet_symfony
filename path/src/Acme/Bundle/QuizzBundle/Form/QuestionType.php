<?php

namespace Acme\Bundle\QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('libelleQuestion', 'text', array(
    'label'  => ' ',
    'attr' => array(
        'placeholder' => 'Intitulé de la question'
    ),
));
            $builder
            ->add('reponses', 'collection', array(
            'type' => new ReponseType(),
            'label' => ' ',
            ));
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\Bundle\QuizzBundle\Entity\Question'
        ));
    }

    public function getName()
    {
        return 'Question';
    }
}
