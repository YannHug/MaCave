<?php

namespace App\Entity;

use App\Repository\BottleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToOne(targetEntity=Stock::class, inversedBy="bottle")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stock;

    /**
     * @ORM\ManyToOne(targetEntity=Grower::class, inversedBy="bottles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $grower;

    /**
     * @ORM\ManyToMany(targetEntity=Tasting::class, inversedBy="bottles")
     */
    private $tasting;

    /**
     * @ORM\ManyToMany(targetEntity=Packing::class, inversedBy="bottles")
     */
    private $pack;

    /**
     * @ORM\ManyToOne(targetEntity=Type::class, inversedBy="bottles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    public function __construct()
    {
        $this->tasting = new ArrayCollection();
        $this->pack = new ArrayCollection();
    }

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

    public function getStock(): ?Stock
    {
        return $this->stock;
    }

    public function setStock(?Stock $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getGrower(): ?Grower
    {
        return $this->grower;
    }

    public function setGrower(?Grower $grower): self
    {
        $this->grower = $grower;

        return $this;
    }

    /**
     * @return Collection|Tasting[]
     */
    public function getTasting(): Collection
    {
        return $this->tasting;
    }

    public function addTasting(Tasting $tasting): self
    {
        if (!$this->tasting->contains($tasting)) {
            $this->tasting[] = $tasting;
        }

        return $this;
    }

    public function removeTasting(Tasting $tasting): self
    {
        $this->tasting->removeElement($tasting);

        return $this;
    }

    /**
     * @return Collection|Packing[]
     */
    public function getPack(): Collection
    {
        return $this->pack;
    }

    public function addPack(Packing $pack): self
    {
        if (!$this->pack->contains($pack)) {
            $this->pack[] = $pack;
        }

        return $this;
    }

    public function removePack(Packing $pack): self
    {
        $this->pack->removeElement($pack);

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }
}
