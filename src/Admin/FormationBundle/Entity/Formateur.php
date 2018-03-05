<?php

namespace Admin\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\form\Extension\Core\Type\FileType;
/**
 * Formateur
 *
 * @ORM\Table(name="formateur")
 * @ORM\Entity(repositoryClass="Admin\FormationBundle\Repository\FormateurRepository")
 */
class Formateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="CIN_formateur", type="integer")
     */
    private $cINFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_formateur", type="string", length=255)
     */
    private $nomFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_formateur", type="string", length=255)
     */
    private $prenomFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_formateur", type="string", length=255)
     */
    private $emailFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="description_formateur", type="string", length=255)
     */
    private $descriptionFormateur;

    /**
     * @var int
     *
     * @ORM\Column(name="tel_formateur", type="integer")
     */
    private $telFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="fb_formateur", type="string", length=255)
     */
    private $fbFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="link_formateur", type="string", length=255)
     */
    private $linkFormateur;
    /**
     * @var string
     *
     * @ORM\Column(name="photo_formateur", type="string", length=255)
     */
    public $photoformateur;
    /**
     * @Assert\File(maxSize="1500k")
     */
    public $file;
    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $cvformateur;

    /**
     * @return mixed
     */
    public function getCvformateur()
    {
        return $this->cvformateur;
    }

    /**
     * @param mixed $cvformateur
     */
    public function setCvformateur($cvformateur)
    {
        $this->cvformateur = $cvformateur;
        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cINFormateur
     *
     * @param integer $cINFormateur
     *
     * @return Formateur
     */
    public function setCINFormateur($cINFormateur)
    {
        $this->cINFormateur = $cINFormateur;

        return $this;
    }

    /**
     * Get cINFormateur
     *
     * @return int
     */
    public function getCINFormateur()
    {
        return $this->cINFormateur;
    }

    /**
     * Set nomFormateur
     *
     * @param string $nomFormateur
     *
     * @return Formateur
     */
    public function setNomFormateur($nomFormateur)
    {
        $this->nomFormateur = $nomFormateur;

        return $this;
    }

    /**
     * Get nomFormateur
     *
     * @return string
     */
    public function getNomFormateur()
    {
        return $this->nomFormateur;
    }

    /**
     * Set prenomFormateur
     *
     * @param string $prenomFormateur
     *
     * @return Formateur
     */
    public function setPrenomFormateur($prenomFormateur)
    {
        $this->prenomFormateur = $prenomFormateur;

        return $this;
    }

    /**
     * Get prenomFormateur
     *
     * @return string
     */
    public function getPrenomFormateur()
    {
        return $this->prenomFormateur;
    }

    /**
     * Set emailFormateur
     *
     * @param string $emailFormateur
     *
     * @return Formateur
     */
    public function setEmailFormateur($emailFormateur)
    {
        $this->emailFormateur = $emailFormateur;

        return $this;
    }

    /**
     * Get emailFormateur
     *
     * @return string
     */
    public function getEmailFormateur()
    {
        return $this->emailFormateur;
    }

    /**
     * Set descriptionFormateur
     *
     * @param string $descriptionFormateur
     *
     * @return Formateur
     */
    public function setDescriptionFormateur($descriptionFormateur)
    {
        $this->descriptionFormateur = $descriptionFormateur;

        return $this;
    }

    /**
     * Get descriptionFormateur
     *
     * @return string
     */
    public function getDescriptionFormateur()
    {
        return $this->descriptionFormateur;
    }

    /**
     * Set telFormateur
     *
     * @param integer $telFormateur
     *
     * @return Formateur
     */
    public function setTelFormateur($telFormateur)
    {
        $this->telFormateur = $telFormateur;

        return $this;
    }

    /**
     * Get telFormateur
     *
     * @return int
     */
    public function getTelFormateur()
    {
        return $this->telFormateur;
    }

    /**
     * Set fbFormateur
     *
     * @param string $fbFormateur
     *
     * @return Formateur
     */
    public function setFbFormateur($fbFormateur)
    {
        $this->fbFormateur = $fbFormateur;

        return $this;
    }

    /**
     * Get fbFormateur
     *
     * @return string
     */
    public function getFbFormateur()
    {
        return $this->fbFormateur;
    }

    /**
     * Set linkFormateur
     *
     * @param string $linkFormateur
     *
     * @return Formateur
     */
    public function setLinkFormateur($linkFormateur)
    {
        $this->linkFormateur = $linkFormateur;

        return $this;
    }

    /**
     * Get linkFormateur
     *
     * @return string
     */
    public function getLinkFormateur()
    {
        return $this->linkFormateur;
    }

    public function getWebPath()
    {
        return null===$this->photoformateur ? null : $this->getUploadDir.'/'.$this->photoformateur;
    }
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    protected function getUploadDir()
    {
        return 'images';
    }
    public function uploadProfilePicture()
    {
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->photoformateur=$this->file->getClientOriginalName();
        $this->file=null;
    }
    /**
     * Set photoformateur
     *
     * @param string $photoformateur
     *
     * @return Categorie
     */
    public function setPhotoformateur($photoformateur)
    {
        $this->photoformateur==$photoformateur;
        return $this;
    }
    /**
     * Get photoformateur
     *
     * @return String
     */
    public function getPhotoformateur()
    {
        return $this->photoformateur;
    }
}

