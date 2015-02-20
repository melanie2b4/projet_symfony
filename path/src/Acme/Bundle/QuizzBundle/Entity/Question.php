<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Question
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
     * @ORM\Column(name="libelle_question", type="string", length=255)
     */
    private $libelleQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=500)
     */
    private $categorie;


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
     * Set categorie
     *
     * @param string $categorie
     * @return Question
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
}
