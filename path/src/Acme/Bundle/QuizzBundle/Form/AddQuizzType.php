<?php
namespace Acme\Bundle\QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class AddQuizzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
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
                    ))
            ;
        ;
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
