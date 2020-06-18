<?php

namespace App\Entity;

use App\Repository\SiteLoadingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=SiteLoadingRepository::class)
 * @Vich\Uploadable
 */
class SiteLoading
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
    private $logoVideo;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @Vich\UploadableField(mapping="videos", fileNameProperty="logoVideo")
     * @var File
     */
    private $logoVideoFile;

    public function getLogoVideo(): ?string
    {
        return $this->logoVideo;
    }

    public function setLogoVideo(string $logoVideo): self
    {
        $this->logoVideo = $logoVideo;

        return $this;
    }

    /**
     * @return File
     */
    public function getLogoVideoFile()
    {
        return $this->logoVideoFile;
    }

    /**
     * @param File $logoVideoFile
     */
    public function setLogoVideoFile($logoVideoFile): void
    {
        $this->logoVideoFile = $logoVideoFile;
    }
}
