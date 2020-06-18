<?php

namespace App\Entity;

use App\Repository\BaseEntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BaseEntityRepository::class)
 */
class BaseEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mainImage;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionCurrentEvent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mapUrl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMainImage(): ?string
    {
        return $this->mainImage;
    }

    public function setMainImage(string $mainImage): self
    {
        $this->mainImage = $mainImage;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptionCurrentEvent(): ?string
    {
        return $this->descriptionCurrentEvent;
    }

    public function setDescriptionCurrentEvent(string $descriptionCurrentEvent): self
    {
        $this->descriptionCurrentEvent = $descriptionCurrentEvent;

        return $this;
    }

    public function getMapUrl(): ?string
    {
        return $this->mapUrl;
    }

    public function setMapUrl(string $mapUrl): self
    {
        $this->mapUrl = $mapUrl;

        return $this;
    }
}
