<?php

namespace App\Entity;

use App\Repository\GalleryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GalleryRepository::class)]
class Gallery
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text', nullable: true)]
    private $text;

    #[ORM\Column(type: 'boolean')]
    private $activated;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $createdAt;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $updatedAt;

    #[ORM\ManyToOne(targetEntity: Structures::class, inversedBy: 'galleries')]
    private $structure;

    #[ORM\OneToMany(mappedBy: 'gallery', targetEntity: GalleryMedia::class)]
    private $galleryMedia;

    public function __construct()
    {
        $this->galleryMedia = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

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

    /**
     * @return Collection<int, GalleryMedia>
     */
    public function getGalleryMedia(): Collection
    {
        return $this->galleryMedia;
    }

    public function addGalleryMedium(GalleryMedia $galleryMedium): self
    {
        if (!$this->galleryMedia->contains($galleryMedium)) {
            $this->galleryMedia[] = $galleryMedium;
            $galleryMedium->setGallery($this);
        }

        return $this;
    }

    public function removeGalleryMedium(GalleryMedia $galleryMedium): self
    {
        if ($this->galleryMedia->removeElement($galleryMedium)) {
            // set the owning side to null (unless already changed)
            if ($galleryMedium->getGallery() === $this) {
                $galleryMedium->setGallery(null);
            }
        }

        return $this;
    }
}
