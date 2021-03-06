<?php

namespace Admin\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $libelleSous;

    /**
     * @var string
     *
     * @ORM\Column(name="description_sous", type="string", length=255)
     */
    private $descriptionSous;
    /**
     * @ORM\ManyToOne(targetEntity="Service" ,cascade={"remove"})
     * @ORM\JoinColumn(name="id_service",referencedColumnName="id")
     */
    private $service;

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
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

