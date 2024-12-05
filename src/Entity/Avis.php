<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Relation ManyToOne avec User (Un avis appartient à un utilisateur)
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'avis')]
    #[ORM\JoinColumn(nullable: false)]  // Le champ user est obligatoire
    private ?User $user = null;

    // Relation ManyToOne avec Lieucamping (Un avis est lié à un lieu de camping)
    #[ORM\ManyToOne(targetEntity: Lieucamping::class, inversedBy: 'avis')]
    #[ORM\JoinColumn(nullable: false)]  // Le champ id_lieu est obligatoire
    private ?Lieucamping $id_lieu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $commentaire = null;
    public function __construct()
    {
        // Initialiser la date à la date actuelle lors de la création de l'entité
        $this->date = new \DateTime();
    }

    #[ORM\PrePersist]
    public function setDateCreation(): void
    {
        if ($this->date === null) {
            $this->date = new \DateTime(); 
        }
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    // Getter et Setter pour User
    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;
        return $this;
    }
    public function getIdLieu(): ?Lieucamping
    {
        return $this->id_lieu;
    }

    public function setIdLieu(Lieucamping $id_lieu): static
    {
        $this->id_lieu = $id_lieu;
        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;
        return $this;
    }

    // Getter et Setter pour Commentaire
    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;
        return $this;
    }
}
