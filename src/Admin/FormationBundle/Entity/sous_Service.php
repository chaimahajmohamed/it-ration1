<?php

namespace Admin\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * sous_Service
 *
 * @ORM\Table(name="sous__service")
 * @ORM\Entity(repositoryClass="Admin\FormationBundle\Repository\sous_ServiceRepository")
 */
class sous_Service
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
     * @ORM\Column(name="libelle_sous", type="string", length=255)
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $libelleSous;

    /**
     * @var string
     *
     * @ORM\Column(name="description_sous", type="string", length=255)
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $descriptionSous;
    /**
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumn(name="id_service",referencedColumnName="id",onDelete="CASCADE")
     * @Assert\NotBlank(message="Ce champ est obligatoire.")
     */
    private $service;

    /**
     * @return Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param Service $service
     */
    public function setService(Service $service)
    {
        $this->service = $service;
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
     * Set libelleSous
     *
     * @param string $libelleSous
     *
     * @return sous_Service
     */
    public function setLibelleSous($libelleSous)
    {
        $this->libelleSous = $libelleSous;

        return $this;
    }

    /**
     * Get libelleSous
     *
     * @return string
     */
    public function getLibelleSous()
    {
        return $this->libelleSous;
    }

    /**
     * Set descriptionSous
     *
     * @param string $descriptionSous
     *
     * @return sous_Service
     */
    public function setDescriptionSous($descriptionSous)
    {
        $this->descriptionSous = $descriptionSous;

        return $this;
    }

    /**
     * Get descriptionSous
     *
     * @return string
     */
    public function getDescriptionSous()
    {
        return $this->descriptionSous;
    }
}

