<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_d = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_f = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?Lieucamping $lieu_camping = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?User $user = null;

    #[ORM\Column]
    private ?int $nombrePersonnes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateD(): ?\DateTimeInterface
    {
        return $this->date_d;
    }

    public function setDateD(\DateTimeInterface $date_d): static
    {
        $this->date_d = $date_d;

        return $this;
    }

    public function getDateF(): ?\DateTimeInterface
    {
        return $this->date_f;
    }

    public function setDateF(\DateTimeInterface $date_f): static
    {
        $this->date_f = $date_f;

        return $this;
    }

    public function getLieuCamping(): ?Lieucamping
    {
        return $this->lieu_camping;
    }

    public function setLieuCamping(?Lieucamping $lieu_camping): static
    {
        $this->lieu_camping = $lieu_camping;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getNombrePersonnes(): ?int
    {
        return $this->nombrePersonnes;
    }

    public function setNombrePersonnes(int $nombrePersonnes): static
    {
        $this->nombrePersonnes = $nombrePersonnes;

        return $this;
    }
}
