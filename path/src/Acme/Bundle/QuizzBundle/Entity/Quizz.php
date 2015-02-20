<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quizz
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Quizz
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
     * @ORM\Column(name="titre", type="string", length=1000)
     */
    private $titre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="top", type="string", length=255)
     */
    private $top;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=500)
     */
    private $categorie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="datetime")
     */
    private $datePublication;


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
     * Set titre
     *
     * @param string $titre
     * @return Quizz
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }
    
    /**
     * Set description
     *
     * @param string $description
     * @return Quizz
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set top
     *
     * @param string $top
     * @return Quizz
     */
    public function setTop($top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Get top
     *
     * @return string 
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Quizz
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
     * Set datePublication
     *
     * @param \DateTime $datePublication
     * @return Quizz
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime 
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }
}
