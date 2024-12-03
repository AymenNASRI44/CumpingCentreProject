<?php

namespace App\Entity;

use App\Repository\LieucampingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LieucampingRepository::class)]
class Lieucamping
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $coordonner = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\ManyToOne(inversedBy: 'lieucampings')]
    private ?Region $region_id = null;

    #[ORM\OneToMany(mappedBy: 'id_lieu', targetEntity: Avis::class)]
    private Collection $avis;

    #[ORM\ManyToMany(targetEntity: Favorit::class, mappedBy: 'id_lieu')]
    private Collection $favorits;

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\OneToMany(mappedBy: 'lieu_camping', targetEntity: Reservation::class)]
    private Collection $reservations;

    #[ORM\Column]
    private ?int $CapaciteDisponible = null;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->favorits = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCoordonner(): ?string
    {
        return $this->coordonner;
    }

    public function setCoordonner(string $coordonner): static
    {
        $this->coordonner = $coordonner;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getRegionId(): ?Region
    {
        return $this->region_id;
    }

    public function setRegionId(?Region $region_id): static
    {
        $this->region_id = $region_id;

        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): static
    {
        if (!$this->avis->contains($avi)) {
            $this->avis->add($avi);
            $avi->setIdLieu($this);
        }

        return $this;
    }

   
    /**
     * @return Collection<int, Favorit>
     */
    public function getFavorits(): Collection
    {
        return $this->favorits;
    }

    public function addFavorit(Favorit $favorit): static
    {
        if (!$this->favorits->contains($favorit)) {
            $this->favorits->add($favorit);
            $favorit->addIdLieu($this);
        }

        return $this;
    }

    public function removeFavorit(Favorit $favorit): static
    {
        if ($this->favorits->removeElement($favorit)) {
            $favorit->removeIdLieu($this);
        }

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setLieuCamping($this);
        }

        return $this;
    }
   
   
}
