<?php

namespace Admin\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="Admin\FormationBundle\Repository\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="nom_formation", type="string", length=255)
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $nomFormation;

    /**
     * @var string
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     * @ORM\Column(name="description_formation", type="text")
     */
    private $descriptionFormation;
    /**
     * @var string
     * @ORM\Column(name="photo_formation", type="string", length=255)
     */
    public $photoFormation;
    /**
     *@Assert\NotBlank(message="S'il vous plait, veuillez joindre une image de format (PNG,JPEG,PJPEG,..).")
     *@Assert\File(maxSize="1500k",mimeTypes={"image/png", "image/jpeg", "image/pjpeg"})
     */
    public $file;
    /**
     * @ORM\ManyToOne(targetEntity="sous_Service")
     * @ORM\JoinColumn(name="id_sous_service",referencedColumnName="id")
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $id_sous_service;

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
     * Set nomFormation
     *
     * @param string $nomFormation
     *
     * @return Formation
     */
    public function setNomFormation($nomFormation)
    {
        $this->nomFormation = $nomFormation;

        return $this;
    }

    /**
     * Get nomFormation
     *
     * @return string
     */
    public function getNomFormation()
    {
        return $this->nomFormation;
    }

    /**
     * Set descriptionFormation
     *
     * @param string $descriptionFormation
     *
     * @return Formation
     */
    public function setDescriptionFormation($descriptionFormation)
    {
        $this->descriptionFormation = $descriptionFormation;

        return $this;
    }

    /**
     * Get descriptionFormation
     *
     * @return string
     */
    public function getDescriptionFormation()
    {
        return $this->descriptionFormation;
    }
    /**
     * @return mixed
     */
    public function getIdSousService()
    {
        return $this->id_sous_service;
    }

    /**
     * @param mixed $id_sous_service
     */
    public function setIdSousService($id_sous_service)
    {
        $this->id_sous_service = $id_sous_service;
    }
    // web path
    public function getWebPath()
    {
        return null===$this->photoFormation ? null : $this->getUploadDir.'/'.$this->photoFormation;
    }
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    protected function getUploadDir()
    {
        return 'photoFormation';
    }
    public function uploadProfilePicture()
    {
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->photoFormation=$this->file->getClientOriginalName();
        $this->file=null;
    }
    /**
     * @return mixed
     */
    public function getPhotoFormation()
    {
        return $this->photoFormation;
    }

    /**
     * @param mixed $photoFormation
     */
    public function setPhotoFormation($photoFormation)
    {
        $this->photoFormation = $photoFormation;
    }


}

