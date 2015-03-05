<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Reponse
 *
 * @ORM\Table()
 *
 *@ORM\Entity(repositoryClass="Acme\Bundle\QuizzBundle\Entity\QuestionRepository")
 */
class Reponse
{

    /** 
    * @ORM\ManytoOne(targetEntity="Acme\Bundle\QuizzBundle\Entity\Question", inversedBy="reponses")
    * @ORM\JoinColumn ( nullable=false)
    *
    */
    private $question;

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
     * @ORM\Column(name="libelle_reponse", type="string", length=500)
     */
    private $libelleReponse;
    
    
    /**
     * @var boolean $isTrue
     *
     * @ORM\Column(name="isTrue", type="boolean")
     */
    private $isTrue;


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
     * Set libelleReponse
     *
     * @param string $libelleReponse
     * @return Reponse
     */
    public function setLibelleReponse($libelleReponse)
    {
        $this->libelleReponse = $libelleReponse;

        return $this;
    }

    /**
     * Get libelleReponse
     *
     * @return string 
     */
    public function getLibelleReponse()
    {
        return $this->libelleReponse;
    }
    
    /**
     * Set isTrue
     *
     * @param boolean $isTrue
     */
    
    public function setIsTrue($isTrue)
    {
        $this->isTrue = $isTrue;
        
    }

    /**
     * Get isTrue
     *
     * @return boolean
     */
     
    public function getIsTrue()
    {
        return $this->isTrue;
        
    }

    /**
     * Set question
     *
     * @param \Acme\Bundle\QuizzBundle\Entity\Question $question
     * @return Reponse
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
}
