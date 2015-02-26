<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table()
 *
@ORM\Entity(repositoryClass="Acme\Bundle\QuizzBundle\Entity\QuestionRepository")
 */
class Reponse
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
     * @var string
     *
     * @ORM\Column(name="libelle_reponse", type="string", length=500)
     */
    private $libelleReponse;
    
    /**
     * @var string
     *
     * @ORM\Column(name="question_id", type="string", length=500)
     */
    private $question_id;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=500)
     */
    private $categorie;
    
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
     * Set question_id
     *
     * @param string $libelleReponse
     * @return Reponse
     */
    public function setQuestion_id($question_id)
    {
        $this->question_id = $question_id;

        return $this;
    }

    /**
     * Get question_id
     *
     * @return string 
     */
    public function getQuestion_id()
    {
        return $this->question_id;
    }
    
    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Reponse
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
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
}
