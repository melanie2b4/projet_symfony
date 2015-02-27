<?php

namespace Acme\Bundle\QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Acme\Bundle\QuizzBundle\Form\QuestionType;

class QuizzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('questions', 'collection', array('type' => new QuestionType()));
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\Bundle\QuizzBundle\Entity\Quizz'
        ));
    }

    public function getName()
    {
        return 'QuizzType';
    }
}
