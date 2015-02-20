<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badge
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Badge
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
     * @ORM\Column(name="libelle_badge", type="string", length=255)
     */
    private $libelleBadge;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=500)
     */
    private $picture;


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
     * Set libelleBadge
     *
     * @param string $libelleBadge
     * @return Badge
     */
    public function setLibelleBadge($libelleBadge)
    {
        $this->libelleBadge = $libelleBadge;

        return $this;
    }

    /**
     * Get libelleBadge
     *
     * @return string 
     */
    public function getLibelleBadge()
    {
        return $this->libelleBadge;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Badge
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
