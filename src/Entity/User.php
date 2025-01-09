<?php
// src/Entity/User.php

namespace App\Entity;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

   

    // Relation OneToMany avec Avis
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Avis::class)]
    private Collection $avis;

    #[ORM\OneToMany(targetEntity: Favorit::class, mappedBy: 'id_user')]
    private Collection $favorits;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Reservation::class)]
    private Collection $reservations;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Region $id_region = null;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials(): void
    {
     
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

   
    /**
     * Relation OneToMany avec Avis
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvis(Avis $avis): static
    {
        if (!$this->avis->contains($avis)) {
            $this->avis->add($avis);
            $avis->setUser($this); // Relier l'avis à cet utilisateur
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
            $favorit->addIdUser($this);
        }

        return $this;
    }

    public function removeFavorit(Favorit $favorit): static
    {
        if ($this->favorits->removeElement($favorit)) {
            $favorit->removeIdUser($this);
        }

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
            $reservation->setUser($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getUser() === $this) {
                $reservation->setUser(null);
            }
        }

        return $this;
    }

    public function getIdRegion(): ?Region
    {
        return $this->id_region;
    }

    public function setIdRegion(?Region $id_region): static
    {
        $this->id_region = $id_region;

        return $this;
    }
}
