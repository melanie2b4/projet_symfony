<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usersreponses
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Usersreponses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    
    /**
     * @var \user[]
     *
     * @ORM\ManytoOne(targetEntity="Users") 
     * 
     */
    private $user;
    

    /** 
    * @ORM\ManytoOne(targetEntity="Question")
    * @ORM\JoinColumn ( nullable=false)
    *
    */
    private $question;
    

   /** 
    * @ORM\ManytoOne(targetEntity="Reponse")
    * @ORM\JoinColumn ( nullable=false)
    *
    */
    private $reponse;
    

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
     * Set quizz
     *
     * @param string $quizz
     * @return Usersreponses
     */
    public function setQuizz($quizz)
    {
        $this->quizz = $quizz;

        return $this;
    }

    /**
     * Get quizz
     *
     * @return string 
     */
    public function getQuizz()
    {
        return $this->quizz;
    }

    /**
     * Set questions
     *
     * @param string $questions
     * @return Usersreponses
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Get questions
     *
     * @return string 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set scoreQuizz
     *
     * @param string $scoreQuizz
     * @return Usersreponses
     */
    public function setScoreQuizz($scoreQuizz)
    {
        $this->scoreQuizz = $scoreQuizz;

        return $this;
    }

    /**
     * Get scoreQuizz
     *
     * @return string 
     */
    public function getScoreQuizz()
    {
        return $this->scoreQuizz;
    }

    /**
     * Set user
     *
     * @param \Acme\Bundle\QuizzBundle\Entity\Users $user
     * @return Usersreponses
     */
    public function setUser(\Acme\Bundle\QuizzBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Acme\Bundle\QuizzBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set question
     *
     * @param \Acme\Bundle\QuizzBundle\Entity\Question $question
     * @return Usersreponses
     */
    public function setQuestion(\Acme\Bundle\QuizzBundle\Entity\Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Acme\Bundle\QuizzBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set reponse
     *
     * @param \Acme\Bundle\QuizzBundle\Entity\Reponse $reponse
     * @return Usersreponses
     */
    public function setReponse(\Acme\Bundle\QuizzBundle\Entity\Reponse $reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return \Acme\Bundle\QuizzBundle\Entity\Reponse 
     */
    public function getReponse()
    {
        return $this->reponse;
    }
}
