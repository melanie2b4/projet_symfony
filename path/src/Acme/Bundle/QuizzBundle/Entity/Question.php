<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Question
{  

    /** 
    * @ORM\ManytoOne(targetEntity="Acme\Bundle\QuizzBundle\Entity\Quizz", inversedBy="questions")
    * @ORM\JoinColumn ( nullable=false)
    *
    */
    private $quizz;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="libelle_question", type="string", length=255)
     */
    private $libelleQuestion;

    /**
     * @var \Reponses[]
     *
     * @ORM\OneToMany(targetEntity="Reponse", mappedBy="question", cascade={"persist","remove"}) 
     * relation inversée 
     */
    private $reponses;


      public function __construct() {
        $this->reponses = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set libelleQuestion
     *
     * @param string $libelleQuestion
     * @return Question
     */
    public function setLibelleQuestion($libelleQuestion)
    {
        $this->libelleQuestion = $libelleQuestion;

        return $this;
    }

    /**
     * Get libelleQuestion
     *
     * @return string 
     */
    public function getLibelleQuestion()
    {
        return $this->libelleQuestion;
    }



    /**
    * Set quizz
    *
    * @param Acme\Bundle\QuizzBundle\Entity\Quizz $quizz
    */
    public function setQuizz (Quizz $quizz)
    {
        $this->quizz = $quizz;
    }

    /**
    * Get quizz
    *
    * @return Acme\Bundle\QuizzBundle\Entity\Quizz
    */
    public function getQuizz()
    {
        return $this -> article;
    }

    /**
     * Add reponses
     *
     * @param \Acme\Bundle\QuizzBundle\Entity\Reponse $reponses
     * @return Question
     */
    public function addReponse(\Acme\Bundle\QuizzBundle\Entity\Reponse $reponses)
    {
        $this->reponses[] = $reponses;

        return $this;
    }

    /**
     * Remove reponses
     *
     * @param \Acme\Bundle\QuizzBundle\Entity\Reponse $reponses
     */
    public function removeReponse(\Acme\Bundle\QuizzBundle\Entity\Reponse $reponses)
    {
        $this->reponses->removeElement($reponses);
    }

    /**
     * Get reponses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponses()
    {
        return $this->reponses;
    }
}
