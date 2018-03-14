<?php

namespace Admin\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="Admin\FormationBundle\Repository\EvenementRepository")
 */
class Evenement
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
     * @var string
     *
     * @ORM\Column(name="Nom_evenement", type="string", length=100)
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $nomEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="infoplus", type="string", length=100)
     */
    private $informationplus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datedebut", type="date")
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $datedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="Datefin", type="date")
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     *
     */
    private $datefin;

    /**
     * @var int
     *
     * @ORM\Column(name="Duree", type="integer")
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $duree;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="Objectif", type="text")
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $objectif;

    /**
     * @var string
     *
     * @ORM\Column(name="Programme", type="text")
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $programme;
    /**
     * @var string
     *
     * @ORM\Column(name="photo_evenement", type="string", length=255)
     */
    public $photoevenement;
    /**
     *@Assert\NotBlank(message="S'il vous plait, joindre un fichier de format (PNG,JPEG,PJPEG,..).")
     * @Assert\File(maxSize="1500k",mimeTypes={"image/png", "image/jpeg", "image/pjpeg"})
     */
    public $file;
    /**
     * @ORM\OneToOne(targetEntity="Formateur")
     * @ORM\JoinColumn(name="id_formateur",referencedColumnName="id")
     */
    private $formateur;

    /**
     * @return Formateur
     */
    public function getFormateur()
    {
        return $this->formateur;
    }

    /**
     * @param Formateur $formateur
     */
    public function setFormateur($formateur)
    {
        $this->formateur = $formateur;
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
     * Set nomEvenement
     *
     * @param string $nomEvenement
     *
     * @return Evenement
     */
    public function setNomEvenement($nomEvenement)
    {
        $this->nomEvenement = $nomEvenement;

        return $this;
    }

    /**
     * Get nomEvenement
     *
     * @return string
     */
    public function getNomEvenement()
    {
        return $this->nomEvenement;
    }





    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return Evenement
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param string $datefin
     *
     * @return Evenement
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return string
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Evenement
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Evenement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set objectif
     *
     * @param string $objectif
     *
     * @return Evenement
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get objectif
     *
     * @return string
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set programme
     *
     * @param string $programme
     *
     * @return Evenement
     */
    public function setProgramme($programme)
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * Get programme
     *
     * @return string
     */
    public function getProgramme()
    {
        return $this->programme;
    }
    /**
     * @return string
     */
    public function getInformationplus()
    {
        return $this->informationplus;
    }

    /**
     * @param string $informationplus
     */
    public function setInformationplus($informationplus)
    {
        $this->informationplus = $informationplus;
    }

    public function getWebPath()
    {
        return null===$this->photoevenement ? null : $this->getUploadDir.'/'.$this->photoevenement;
    }
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    protected function getUploadDir()
    {
        return 'evenements';
    }
    public function uploadProfilePicture()
    {
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->photoevenement=$this->file->getClientOriginalName();
        $this->file=null;
    }
}

