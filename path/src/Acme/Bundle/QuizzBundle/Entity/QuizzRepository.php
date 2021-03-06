<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * QuizzRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */


class QuizzRepository extends EntityRepository
{
    public function getAllQuizz()
    {
        $quizz = $this->getDoctrine()
        ->getRepository('AcmeQuizzBundle:Quizz')
        ->find($id)
        ->find($titre)
        ->find($categorie)
        ->find($datePublication)
        ;
    }
    
    public function getQuizzByOrderDate($order)
    {
        return $this->getEntityManager()->createQueryBuilder()
        ->add('select', 'q')
        ->add('from', 'AcmeQuizzBundle:Quizz q')
        ->add('orderBy', 'q.datePublication '.$order)
        ->getQuery()
        ->getResult();
    }
    
    public function getQuizzByOrderTop($order)
    {
        return $this->getEntityManager()->createQueryBuilder()
        ->add('select', 'q')
        ->add('from', 'AcmeQuizzBundle:Quizz q')
        ->add('orderBy', 'q.top '.$order)
        ->getQuery()
        ->getResult();
    }
    
    public function getQuizzByCategorie($category, $order)
    {
        return $this->getEntityManager()->createQueryBuilder()
        ->add('select', 'q')
        ->add('from', 'AcmeQuizzBundle:Quizz q')
        ->add('where', 'q.categorie = :category')
        ->add('orderBy', 'q.datePublication '.$order)
        ->setParameter('category', $category)
        ->getQuery()
        ->getResult();
    }

    public function findPost()
    {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->add('select', 'q')
        ->add('from', 'AcmeQuizzBundle:Quizz q')
        ;

        return $qb->getQuery()->getResult();
    }

    public function findQuizzWithSearchTermQuery($searchTerm)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb
        ->select('q')
        ->from('AcmeQuizzBundle:Quizz', 'q')
        ->where(
            $qb->expr()->like('q.titre', $qb->expr()->literal('%' . $searchTerm . '%'))
            )
        ->orWhere(
            $qb->expr()->like('q.description', $qb->expr()->literal('%' . $searchTerm . '%'))
            );

        return $qb->getQuery();
    }

}
