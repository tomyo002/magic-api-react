<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\CardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CardRepository::class)]
#[ApiResource]
#[Get]
#[GetCollection]
class Card
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $Subtype = null;

    #[ORM\Column(nullable: true)]
    private ?int $healthPoint = null;

    #[ORM\Column(nullable: true)]
    private ?int $attackPoint = null;

    #[ORM\Column(nullable: true)]
    private ?int $loyalty = null;

    #[ORM\ManyToOne(inversedBy: 'cards')]
    private ?Type $type = null;

    #[ORM\ManyToOne(inversedBy: 'cards')]
    #[Ap]
    private ?Extension $extension = null;

    #[ORM\OneToMany(targetEntity: Cost::class, mappedBy: 'card')]
    private Collection $costs;

    #[ORM\OneToMany(targetEntity: Capacity::class, mappedBy: 'card')]
    private Collection $capacities;
    #[ORM\Column(length: 10)]
    private ?string $rarity = null;

    #[ORM\OneToMany(targetEntity: KeywordCard::class, mappedBy: 'card')]
    private Collection $keywordCards;

    public function __construct()
    {
        $this->costs = new ArrayCollection();
        $this->capacities = new ArrayCollection();
        $this->keywordCards = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSubtype(): ?string
    {
        return $this->Subtype;
    }

    public function setSubtype(string $Subtype): static
    {
        $this->Subtype = $Subtype;

        return $this;
    }

    public function getHealthPoint(): ?int
    {
        return $this->healthPoint;
    }

    public function setHealthPoint(?int $healthPoint): static
    {
        $this->healthPoint = $healthPoint;

        return $this;
    }

    public function getAttackPoint(): ?int
    {
        return $this->attackPoint;
    }

    public function setAttackPoint(?int $attackPoint): static
    {
        $this->attackPoint = $attackPoint;

        return $this;
    }

    public function getLoyalty(): ?int
    {
        return $this->loyalty;
    }

    public function setLoyalty(?int $loyalty): static
    {
        $this->loyalty = $loyalty;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getExtension(): ?Extension
    {
        return $this->extension;
    }

    public function setExtension(?Extension $extension): static
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * @return Collection<int, Cost>
     */
    public function getCosts(): Collection
    {
        return $this->costs;
    }

    public function addCost(Cost $cost): static
    {
        if (!$this->costs->contains($cost)) {
            $this->costs->add($cost);
            $cost->setCard($this);
        }

        return $this;
    }

    public function removeCost(Cost $cost): static
    {
        if ($this->costs->removeElement($cost)) {
            // set the owning side to null (unless already changed)
            if ($cost->getCard() === $this) {
                $cost->setCard(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Capacity>
     */
    public function getCapacities(): Collection
    {
        return $this->capacities;
    }

    public function addCapacity(Capacity $capacity): static
    {
        if (!$this->capacities->contains($capacity)) {
            $this->capacities->add($capacity);
            $capacity->setCard($this);
        }

        return $this;
    }

    public function removeCapacity(Capacity $capacity): static
    {
        if ($this->capacities->removeElement($capacity)) {
            // set the owning side to null (unless already changed)
            if ($capacity->getCard() === $this) {
                $capacity->setCard(null);
            }
        }

        return $this;
    }


    public function getRarity(): ?string
    {
        return $this->rarity;
    }

    public function setRarity(string $rarity): static
    {
        $this->rarity = $rarity;

        return $this;
    }

    /**
     * @return Collection<int, KeywordCard>
     */
    public function getKeywordCards(): Collection
    {
        return $this->keywordCards;
    }

    public function addKeywordCard(KeywordCard $keywordCard): static
    {
        if (!$this->keywordCards->contains($keywordCard)) {
            $this->keywordCards->add($keywordCard);
            $keywordCard->setCard($this);
        }

        return $this;
    }

    public function removeKeywordCard(KeywordCard $keywordCard): static
    {
        if ($this->keywordCards->removeElement($keywordCard)) {
            // set the owning side to null (unless already changed)
            if ($keywordCard->getCard() === $this) {
                $keywordCard->setCard(null);
            }
        }

        return $this;
    }
}
