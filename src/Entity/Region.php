<?php

namespace App\Entity;

use App\Repository\RegionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegionRepository::class)]
class Region
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_region = null;

    #[ORM\OneToMany(mappedBy: 'nom_region', targetEntity: User::class)]
    private Collection $users;

    #[ORM\OneToMany(mappedBy: 'region_id', targetEntity: Lieucamping::class)]
    private Collection $lieucampings;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->lieucampings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRegion(): ?string
    {
        return $this->nom_region;
    }

    public function setNomRegion(string $nom_region): static
    {
        $this->nom_region = $nom_region;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setNomRegion($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getNomRegion() === $this) {
                $user->setNomRegion(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Lieucamping>
     */
    public function getLieucampings(): Collection
    {
        return $this->lieucampings;
    }

    public function addLieucamping(Lieucamping $lieucamping): static
    {
        if (!$this->lieucampings->contains($lieucamping)) {
            $this->lieucampings->add($lieucamping);
            $lieucamping->setRegionId(region_id: $this);
        }

        return $this;
    }

    public function removeLieucamping(Lieucamping $lieucamping): static
    {
        if ($this->lieucampings->removeElement($lieucamping)) {
            // set the owning side to null (unless already changed)
            if ($lieucamping->getRegionId() === $this) {
                $lieucamping->setRegionId(null);
            }
        }

        return $this;
    }
}
