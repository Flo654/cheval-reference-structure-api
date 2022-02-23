<?php

namespace App\Entity;

use App\Repository\TarifRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TarifRepository::class)]
class Tarif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $adhesion;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $box;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $pre;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $box_pre;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $foin;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $doc;

    #[ORM\Column(type: 'boolean')]
    private $activated;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $createdAt;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $updatedAt;

    #[ORM\ManyToOne(targetEntity: Structures::class, inversedBy: 'tarifs')]
    private $structure;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdhesion(): ?string
    {
        return $this->adhesion;
    }

    public function setAdhesion(?string $adhesion): self
    {
        $this->adhesion = $adhesion;

        return $this;
    }

    public function getBox(): ?string
    {
        return $this->box;
    }

    public function setBox(?string $box): self
    {
        $this->box = $box;

        return $this;
    }

    public function getPre(): ?string
    {
        return $this->pre;
    }

    public function setPre(?string $pre): self
    {
        $this->pre = $pre;

        return $this;
    }

    public function getBoxPre(): ?string
    {
        return $this->box_pre;
    }

    public function setBoxPre(?string $box_pre): self
    {
        $this->box_pre = $box_pre;

        return $this;
    }

    public function getFoin(): ?string
    {
        return $this->foin;
    }

    public function setFoin(?string $foin): self
    {
        $this->foin = $foin;

        return $this;
    }

    public function getDoc(): ?string
    {
        return $this->doc;
    }

    public function setDoc(?string $doc): self
    {
        $this->doc = $doc;

        return $this;
    }

    public function getActivated(): ?bool
    {
        return $this->activated;
    }

    public function setActivated(bool $activated): self
    {
        $this->activated = $activated;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getStructure(): ?Structures
    {
        return $this->structure;
    }

    public function setStructure(?Structures $structure): self
    {
        $this->structure = $structure;

        return $this;
    }
}
