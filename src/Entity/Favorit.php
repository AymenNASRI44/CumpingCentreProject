<?php

namespace App\Entity;

use App\Repository\FavoritRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FavoritRepository::class)]
class Favorit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'favorits')]
    private Collection $id_user;

    #[ORM\ManyToMany(targetEntity: Lieucamping::class, inversedBy: 'favorits')]
    private Collection $id_lieu;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_fav = null;

    public function __construct()
    {
        $this->id_user = new ArrayCollection();
        $this->id_lieu = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, User>
     */
    public function getIdUser(): Collection
    {
        return $this->id_user;
    }

    public function addIdUser(User $idUser): static
    {
        if (!$this->id_user->contains($idUser)) {
            $this->id_user->add($idUser);
        }

        return $this;
    }

    public function removeIdUser(User $idUser): static
    {
        $this->id_user->removeElement($idUser);

        return $this;
    }

    /**
     * @return Collection<int, Lieucamping>
     */
    public function getIdLieu(): Collection
    {
        return $this->id_lieu;
    }

    public function addIdLieu(Lieucamping $idLieu): static
    {
        if (!$this->id_lieu->contains($idLieu)) {
            $this->id_lieu->add($idLieu);
        }

        return $this;
    }

    public function removeIdLieu(Lieucamping $idLieu): static
    {
        $this->id_lieu->removeElement($idLieu);

        return $this;
    }

    public function getDateFav(): ?\DateTimeInterface
    {
        return $this->date_fav;
    }

    public function setDateFav(\DateTimeInterface $date_fav): static
    {
        $this->date_fav = $date_fav;

        return $this;
    }
}
