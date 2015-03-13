<?php

namespace Acme\Bundle\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Quizz
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\Bundle\QuizzBundle\Entity\QuizzRepository")
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
     * @ORM\Column(name="img", type="string", length=1000)
     */
    private $img;

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
     * @var \Question[]
     *
     * @ORM\OneToMany(targetEntity="Question", mappedBy="quizz", cascade={"persist","remove"}) 
     * relation inversée 
     */
    private $questions;

    public function __construct() {
        $this->questions = new ArrayCollection();
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
     * Set img
     *
     * @param string $img
     * @return Quizz
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
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




    /**
     * Add questions
     *
     * @param \Acme\Bundle\QuizzBundle\Entity\Question $questions
     * @return Quizz
     */
    public function addQuestion(\Acme\Bundle\QuizzBundle\Entity\Question $questions)
    {
        $this->questions[] = $questions;

        return $this;
    }

    /**
     * Remove questions
     *
     * @param \Acme\Bundle\QuizzBundle\Entity\Question $questions
     */
    public function removeQuestion(\Acme\Bundle\QuizzBundle\Entity\Question $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

///////////// UPLOAD IMG ////////////////    
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    // ...
    
    public $path;
    
    // propriété utilisé temporairement pour la suppression
    private $filenameForRemove;

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            $this->path = $this->file->guessExtension();
        }
    }
    


    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
     
    public function upload()
    {
        
        if (null === $this->file) {
            return;
        }

        // vous devez lancer une exception ici si le fichier ne peut pas
        // être déplacé afin que l'entité ne soit pas persistée dans la
        // base de données comme le fait la méthode move() de UploadedFile
        
        $newFileName = uniqid();
        $ext = $this->file->guessExtension();
        $this->file->move($this->getUploadRootDir(), $newFileName.'.'.$ext);

        $this->img = $newFileName.'.'.$ext;
        unset($this->file);

    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->filenameForRemove = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $toReturn = true;
        if( $this->filenameForRemove !== NULL && !empty( $this->filenameForRemove ) === true )
        {
            if( file_exists( $this->filenameForRemove ) === true )
            {
                $toReturn = unlink($this->filenameForRemove);
                $this->filenameForRemove = NULL;
            }
        }
        return $toReturn;
    }

    public function getAbsolutePath()
    {
      return $this->path ? null : $this->getUploadRootDir().'/'.$this->img;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../demoBundle/Resources/public/images/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return '';
    }
    
}
