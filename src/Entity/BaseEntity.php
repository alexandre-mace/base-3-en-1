<?php

namespace App\Entity;

use App\Repository\BaseEntityRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass=BaseEntityRepository::class)
 * @Vich\Uploadable
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
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $logo;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="logo")
     * @var File
     */
    private $logoFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

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

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mapImage;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="mapImage")
     * @var File
     */
    private $mapImageFile;

    /**
     * @ORM\Column(type="text")
     */
    private $description2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $siteUrl;

    public function getId(): ?int
    {
        return $this->id;
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

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return File
     */
    public function getLogoFile()
    {
        return $this->logoFile;
    }

    /**
     * @param File $logoFile
     */
    public function setLogoFile($logoFile): void
    {
        $this->logoFile = $logoFile;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMapImage()
    {
        return $this->mapImage;
    }

    public function setMapImage($mapImage)
    {
        $this->mapImage = $mapImage;

        return $this;
    }

    /**
     * @return File
     */
    public function getMapImageFile()
    {
        return $this->mapImageFile;
    }

    /**
     * @param File $mapImageFile
     */
    public function setMapImageFile($mapImageFile): void
    {
        $this->mapImageFile = $mapImageFile;
    }

    public function getDescription2(): ?string
    {
        return $this->description2;
    }

    public function setDescription2(string $description2): self
    {
        $this->description2 = $description2;

        return $this;
    }

    public function getSiteUrl(): ?string
    {
        return $this->siteUrl;
    }

    public function setSiteUrl(string $siteUrl): self
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }
}
