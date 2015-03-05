<?php
namespace Acme\Bundle\QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Acme\Bundle\QuizzBundle\Form\AddQuestionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class AddQuizzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text', array(
    'label' => ' ',
    'attr' => array(
        'placeholder' => 'Nom du quizz*',
    )
) )
            ->add('description','textarea', array(
    'label' => ' ',
    'attr' => array(
        'placeholder' => 'Description*',
    )
) )
            ->add('categorie', 'choice', array(
                'choices'   => array(
                'Sport'   => 'Sport',
                'Divertissement' => 'Divertissement',
                'Sante'   => 'Sante',
                'Politique'   => 'Politique',
                'Culture Generale' => 'CultureGenerale',
                'Gastronomie'   => 'Gastronomie',
                'Geographie'   => 'Geographie',
                'Histoire' => 'Histoire',
                'Nature'   => 'Nature',
                'High-tech'   => 'Hightech',
                    ),
                'multiple'  => false,
                'label' => 'Categorie du Quizz*',
                'attr' => array(
                'placeholder' => 'Nom du quizz',
    )
 
                    ))
            ->add('file', 'file', array(
                'label' => 'Ajouter une image',
                'attr' => array(
                'placeholder' => 'Ajouter une image',
            )
)) ;
        $builder
            ->add('questions', 'collection', array(
            'type' => new QuestionType(),
            'label' => ' ',
            ));
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'acme\Bundle\QuizzBundle\Entity\Quizz',
        ));
    }

    public function getName()
    {
        return 'add_quizz_type';
    }
    
    
}
