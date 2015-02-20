<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=500)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreSport", type="string", length=500)
     */
    private $scoreSport;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreDivertissements", type="string", length=500)
     */
    private $scoreDivertissements;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreNature", type="string", length=500)
     */
    private $scoreNature;

    /**
     * @var string
     *
     * @ORM\Column(name="scorePolitique", type="string", length=500)
     */
    private $scorePolitique;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreHistoire", type="string", length=500)
     */
    private $scoreHistoire;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreHightech", type="string", length=500)
     */
    private $scoreHightech;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreGastronomie", type="string", length=500)
     */
    private $scoreGastronomie;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreSante", type="string", length=500)
     */
    private $scoreSante;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreGeographie", type="string", length=500)
     */
    private $scoreGeographie;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreCulturegenerale", type="string", length=500)
     */
    private $scoreCulturegenerale;

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
     * Set pseudo
     *
     * @param string $pseudo
     * @return Users
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }


    /**
     * Set mail
     *
     * @param string $mail
     * @return Users
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Users
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

    /**
     * Set scoreSport
     *
     * @param string $scoreSport
     * @return Users
     */
    public function setScoreSport($scoreSport)
    {
        $this->scoreSport = $scoreSport;

        return $this;
    }

    /**
     * Get scoreSport
     *
     * @return string 
     */
    public function getScoreSport()
    {
        return $this->scoreSport;
    }


    /**
     * Set scoreDivertissements
     *
     * @param string $scoreDivertissements
     * @return Users
     */
    public function setScoreDivertissements($scoreDivertissements)
    {
        $this->scoreDivertissements = $scoreDivertissements;

        return $this;
    }

    /**
     * Get scoreDivertissements
     *
     * @return string 
     */
    public function getScoreDivertissements()
    {
        return $this->scoreDivertissements;
    }

    /**
     * Set scoreNature
     *
     * @param string $scoreNature
     * @return Users
     */
    public function setScoreNature($scoreNature)
    {
        $this->scoreNature = $scoreNature;

        return $this;
    }

    /**
     * Get scoreNature
     *
     * @return string 
     */
    public function getScoreNature()
    {
        return $this->scoreNature;
    }

    /**
     * Set scorePolitique
     *
     * @param string $scorePolitique
     * @return Users
     */
    public function setScorePolitique($scorePolitique)
    {
        $this->scorePolitique = $scorePolitique;

        return $this;
    }

    /**
     * Get scorePolitique
     *
     * @return string 
     */
    public function getScorePolitique()
    {
        return $this->scorePolitique;
    }

    /**
     * Set scoreHistoire
     *
     * @param string $scoreHistoire
     * @return Users
     */
    public function setScoreHistoire($scoreHistoire)
    {
        $this->scoreHistoire = $scoreHistoire;

        return $this;
    }

    /**
     * Get scoreHistoire
     *
     * @return string 
     */
    public function getScoreHistoire()
    {
        return $this->scoreHistoire;
    }

    /**
     * Set scoreHightech
     *
     * @param string $scoreHightech
     * @return Users
     */
    public function setScoreHightech($scoreHightech)
    {
        $this->scoreHightech = $scoreHightech;

        return $this;
    }

    /**
     * Get scoreHightech
     *
     * @return string 
     */
    public function getScoreHightech()
    {
        return $this->scoreHightech;
    }

    /**
     * Set scoreGastronomie
     *
     * @param string $scoreGastronomie
     * @return Users
     */
    public function setScoreGastronomie($scoreGastronomie)
    {
        $this->scoreGastronomie = $scoreGastronomie;

        return $this;
    }


    /**
     * Get scoreGastronomie
     *
     * @return string 
     */
    public function setScoreGastronomie()
    {
        return $this->scoreGastronomie;
    }

    /**
     * Set scoreSante
     *
     * @param string $scoreSante
     * @return Users
     */
    public function setScoreSante($scoreSante)
    {
        $this->scoreSante = $scoreSante;

        return $this;
    }

    /**
     * Get scoreSante
     *
     * @return string 
     */
    public function setScoreSante()
    {
        return $this->scoreSante;
    }


    /**
     * Set scoreGeographie
     *
     * @param string $scoreGeographie
     * @return Users
     */
    public function setScoreGeographie($scoreGeographie)
    {
        $this->scoreGeographie = $scoreGeographie;

        return $this;
    }

    /**
     * Get scoreGeographie
     *
     * @return string 
     */
    public function setScoreGeographie()
    {
        return $this->scoreGeographie;
    }

    /**
     * Set scoreCulturegenerale
     *
     * @param string $scoreCulturegenerale
     * @return Users
     */
    public function setScoreCulturegenerale($scoreCulturegenerale)
    {
        $this->scoreCulturegenerale = $scoreCulturegenerale;

        return $this;
    }

    /**
     * Get scoreCulturegenerale
     *
     * @return string 
     */
    public function setScoreCulturegenerale()
    {
        return $this->scoreCulturegenerale;
    }

}
