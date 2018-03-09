<?php

namespace Admin\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="Admin\FormationBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="libelle_service", type="string", length=255)
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $libelleService;

    /**
     * @var string
     *
     * @ORM\Column(name="description_service", type="string", length=255)
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $descriptionService;
    /**
     * @var string
     *
     * @ORM\Column(name="image_service", type="string", length=255)
     */
    public $imageservice;

    /**
     * @Assert\NotBlank(message="S'il vous plait, joindre un fichier de format (PNG,JPEG,..).")
     * @Assert\File(maxSize="1500k",mimeTypes={"image/png", "image/jpeg", "image/pjpeg"})
     */
    public $file;


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
     * Set libelleService
     *
     * @param string $libelleService
     *
     * @return Service
     */
    public function setLibelleService($libelleService)
    {
        $this->libelleService = $libelleService;

        return $this;
    }

    /**
     * Get libelleService
     *
     * @return string
     */
    public function getLibelleService()
    {
        return $this->libelleService;
    }

    /**
     * Set descriptionService
     *
     * @param string $descriptionService
     *
     * @return Service
     */
    public function setDescriptionService($descriptionService)
    {
        $this->descriptionService = $descriptionService;

        return $this;
    }

    /**
     * Get descriptionService
     *
     * @return string
     */
    public function getDescriptionService()
    {
        return $this->descriptionService;
    }
    //
    public function getWebPath()
    {
        return null===$this->imageservice ? null : $this->getUploadDir.'/'.$this->imageservice;
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
        $this->imageservice=$this->file->getClientOriginalName();
        $this->file=null;
    }
    //
    /**
     * Set imageservice
     *
     * @param string $imageservice
     *
     * @return Categorie
     */
    public function setImageService($imageeservice)
    {
        $this->imageservice==$imageeservice;
        return $this;
    }
    /**
     * Get imageservice
     *
     * @return String
     */
    public function getImageService()
    {
        return $this->imageservice;
    }
}

