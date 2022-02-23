<?php

namespace App\Entity;

use App\Repository\DisciplineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DisciplineRepository::class)]
class Discipline
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $createdAt;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $updatedAt;

    #[ORM\OneToMany(mappedBy: 'discipline', targetEntity: StructureDiscipline::class)]
    private $structureDisciplines;

    public function __construct()
    {
        $this->structureDisciplines = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

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

    /**
     * @return Collection<int, StructureDiscipline>
     */
    public function getStructureDisciplines(): Collection
    {
        return $this->structureDisciplines;
    }

    public function addStructureDiscipline(StructureDiscipline $structureDiscipline): self
    {
        if (!$this->structureDisciplines->contains($structureDiscipline)) {
            $this->structureDisciplines[] = $structureDiscipline;
            $structureDiscipline->setDiscipline($this);
        }

        return $this;
    }

    public function removeStructureDiscipline(StructureDiscipline $structureDiscipline): self
    {
        if ($this->structureDisciplines->removeElement($structureDiscipline)) {
            // set the owning side to null (unless already changed)
            if ($structureDiscipline->getDiscipline() === $this) {
                $structureDiscipline->setDiscipline(null);
            }
        }

        return $this;
    }
}
