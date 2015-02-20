<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table()
 * @ORM\Entity
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
}
