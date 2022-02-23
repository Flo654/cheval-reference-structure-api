<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\StructuresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StructuresRepository::class)]
#[ApiResource]
class Structures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $city;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $department;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $postal_code;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $address;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $latitude;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $longitude;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $telephone;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $website;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $email;

    #[ORM\Column(type: 'text', nullable: true)]
    private $text;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $logo;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $img_header;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $img_presentation;

    #[ORM\Column(type: 'boolean')]
    private $activated;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $created_at;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $updated_at;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: Tarif::class)]
    private $tarifs;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: Staff::class)]
    private $staff;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: Planning::class)]
    private $plannings;

    #[ORM\ManyToMany(targetEntity: Installations::class, mappedBy: 'structure')]
    private $installations;

    #[ORM\ManyToMany(targetEntity: StructureType::class, mappedBy: 'structure')]
    private $structureTypes;

    #[ORM\ManyToMany(targetEntity: Pension::class, mappedBy: 'structure')]
    private $pensions;

    #[ORM\ManyToMany(targetEntity: Prestation::class, mappedBy: 'structure')]
    private $prestations;

    #[ORM\ManyToMany(targetEntity: Service::class, mappedBy: 'structure')]
    private $services;

    #[ORM\ManyToMany(targetEntity: Breed::class, mappedBy: 'structure')]
    private $breeds;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: StructureDiscipline::class)]
    private $structureDisciplines;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: Gallery::class)]
    private $galleries;
     

    public function __construct()
    {
        $this->tarifs = new ArrayCollection();
        $this->staff = new ArrayCollection();
        $this->plannings = new ArrayCollection();
        $this->installations = new ArrayCollection();
        $this->structureTypes = new ArrayCollection();
        $this->pensions = new ArrayCollection();
        $this->prestations = new ArrayCollection();
        $this->services = new ArrayCollection();
        $this->breeds = new ArrayCollection();
        $this->structureDisciplines = new ArrayCollection();
        $this->galleries = new ArrayCollection();
               
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

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postal_code;
    }

    public function setPostalCode(?int $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
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

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getImgHeader(): ?string
    {
        return $this->img_header;
    }

    public function setImgHeader(?string $img_header): self
    {
        $this->img_header = $img_header;

        return $this;
    }

    public function getImgPresentation(): ?string
    {
        return $this->img_presentation;
    }

    public function setImgPresentation(?string $img_presentation): self
    {
        $this->img_presentation = $img_presentation;

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
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection<int, Tarif>
     */
    public function getTarifs(): Collection
    {
        return $this->tarifs;
    }

    public function addTarif(Tarif $tarif): self
    {
        if (!$this->tarifs->contains($tarif)) {
            $this->tarifs[] = $tarif;
            $tarif->setStructure($this);
        }

        return $this;
    }

    public function removeTarif(Tarif $tarif): self
    {
        if ($this->tarifs->removeElement($tarif)) {
            // set the owning side to null (unless already changed)
            if ($tarif->getStructure() === $this) {
                $tarif->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Staff>
     */
    public function getStaff(): Collection
    {
        return $this->staff;
    }

    public function addStaff(Staff $staff): self
    {
        if (!$this->staff->contains($staff)) {
            $this->staff[] = $staff;
            $staff->setStructure($this);
        }

        return $this;
    }

    public function removeStaff(Staff $staff): self
    {
        if ($this->staff->removeElement($staff)) {
            // set the owning side to null (unless already changed)
            if ($staff->getStructure() === $this) {
                $staff->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Planning>
     */
    public function getPlannings(): Collection
    {
        return $this->plannings;
    }

    public function addPlanning(Planning $planning): self
    {
        if (!$this->plannings->contains($planning)) {
            $this->plannings[] = $planning;
            $planning->setStructure($this);
        }

        return $this;
    }

    public function removePlanning(Planning $planning): self
    {
        if ($this->plannings->removeElement($planning)) {
            // set the owning side to null (unless already changed)
            if ($planning->getStructure() === $this) {
                $planning->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Installations>
     */
    public function getInstallations(): Collection
    {
        return $this->installations;
    }

    public function addInstallation(Installations $installation): self
    {
        if (!$this->installations->contains($installation)) {
            $this->installations[] = $installation;
            $installation->addStructure($this);
        }

        return $this;
    }

    public function removeInstallation(Installations $installation): self
    {
        if ($this->installations->removeElement($installation)) {
            $installation->removeStructure($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, StructureType>
     */
    public function getStructureTypes(): Collection
    {
        return $this->structureTypes;
    }

    public function addStructureType(StructureType $structureType): self
    {
        if (!$this->structureTypes->contains($structureType)) {
            $this->structureTypes[] = $structureType;
            $structureType->addStructure($this);
        }

        return $this;
    }

    public function removeStructureType(StructureType $structureType): self
    {
        if ($this->structureTypes->removeElement($structureType)) {
            $structureType->removeStructure($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Pension>
     */
    public function getPensions(): Collection
    {
        return $this->pensions;
    }

    public function addPension(Pension $pension): self
    {
        if (!$this->pensions->contains($pension)) {
            $this->pensions[] = $pension;
            $pension->addStructure($this);
        }

        return $this;
    }

    public function removePension(Pension $pension): self
    {
        if ($this->pensions->removeElement($pension)) {
            $pension->removeStructure($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Prestation>
     */
    public function getPrestations(): Collection
    {
        return $this->prestations;
    }

    public function addPrestation(Prestation $prestation): self
    {
        if (!$this->prestations->contains($prestation)) {
            $this->prestations[] = $prestation;
            $prestation->addStructure($this);
        }

        return $this;
    }

    public function removePrestation(Prestation $prestation): self
    {
        if ($this->prestations->removeElement($prestation)) {
            $prestation->removeStructure($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Service>
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    public function addService(Service $service): self
    {
        if (!$this->services->contains($service)) {
            $this->services[] = $service;
            $service->addStructure($this);
        }

        return $this;
    }

    public function removeService(Service $service): self
    {
        if ($this->services->removeElement($service)) {
            $service->removeStructure($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Breed>
     */
    public function getBreeds(): Collection
    {
        return $this->breeds;
    }

    public function addBreed(Breed $breed): self
    {
        if (!$this->breeds->contains($breed)) {
            $this->breeds[] = $breed;
            $breed->addStructure($this);
        }

        return $this;
    }

    public function removeBreed(Breed $breed): self
    {
        if ($this->breeds->removeElement($breed)) {
            $breed->removeStructure($this);
        }

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
            $structureDiscipline->setStructure($this);
        }

        return $this;
    }

    public function removeStructureDiscipline(StructureDiscipline $structureDiscipline): self
    {
        if ($this->structureDisciplines->removeElement($structureDiscipline)) {
            // set the owning side to null (unless already changed)
            if ($structureDiscipline->getStructure() === $this) {
                $structureDiscipline->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Gallery>
     */
    public function getGalleries(): Collection
    {
        return $this->galleries;
    }

    public function addGallery(Gallery $gallery): self
    {
        if (!$this->galleries->contains($gallery)) {
            $this->galleries[] = $gallery;
            $gallery->setStructure($this);
        }

        return $this;
    }

    public function removeGallery(Gallery $gallery): self
    {
        if ($this->galleries->removeElement($gallery)) {
            // set the owning side to null (unless already changed)
            if ($gallery->getStructure() === $this) {
                $gallery->setStructure(null);
            }
        }

        return $this;
    } 


}
