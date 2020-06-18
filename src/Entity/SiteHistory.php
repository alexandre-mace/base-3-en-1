<?php

namespace App\Entity;

use App\Repository\SiteHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SiteHistoryRepository::class)
 */
class SiteHistory
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
    private $firstTitle;

    /**
     * @ORM\Column(type="text")
     */
    private $firstDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondTitle;

    /**
     * @ORM\Column(type="text")
     */
    private $secondDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstTitle(): ?string
    {
        return $this->firstTitle;
    }

    public function setFirstTitle(string $firstTitle): self
    {
        $this->firstTitle = $firstTitle;

        return $this;
    }

    public function getFirstDescription(): ?string
    {
        return $this->firstDescription;
    }

    public function setFirstDescription(string $firstDescription): self
    {
        $this->firstDescription = $firstDescription;

        return $this;
    }

    public function getSecondTitle(): ?string
    {
        return $this->secondTitle;
    }

    public function setSecondTitle(string $secondTitle): self
    {
        $this->secondTitle = $secondTitle;

        return $this;
    }

    public function getSecondDescription(): ?string
    {
        return $this->secondDescription;
    }

    public function setSecondDescription(string $secondDescription): self
    {
        $this->secondDescription = $secondDescription;

        return $this;
    }
}
