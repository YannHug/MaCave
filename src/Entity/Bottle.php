<?php

namespace App\Entity;

use App\Repository\BottleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BottleRepository::class)
 */
class Bottle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $vintage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $domain;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $grade;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $appellation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $grapeVarieties;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $serving;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVintage(): ?int
    {
        return $this->vintage;
    }

    public function setVintage(?int $vintage): self
    {
        $this->vintage = $vintage;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(?int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getAppellation(): ?string
    {
        return $this->appellation;
    }

    public function setAppellation(?string $appellation): self
    {
        $this->appellation = $appellation;

        return $this;
    }

    public function getGrapeVarieties(): ?string
    {
        return $this->grapeVarieties;
    }

    public function setGrapeVarieties(?string $grapeVarieties): self
    {
        $this->grapeVarieties = $grapeVarieties;

        return $this;
    }

    public function getServing(): ?string
    {
        return $this->serving;
    }

    public function setServing(?string $serving): self
    {
        $this->serving = $serving;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
