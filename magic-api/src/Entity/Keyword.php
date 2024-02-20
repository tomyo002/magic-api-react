<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\KeywordRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KeywordRepository::class)]
#[ApiResource]
#[Get]
#[GetCollection]
class Keyword
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $name = null;

    #[ORM\Column(length: 1000)]
    private ?string $description = null;
    #[ORM\OneToMany(targetEntity: KeywordCard::class, mappedBy: 'keyword')]
    #[ApiProperty(example: 'api/keywordCard/0')]
    private Collection $keywordCards;

    public function __construct()
    {
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

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
            $keywordCard->setKeyword($this);
        }

        return $this;
    }

    public function removeKeywordCard(KeywordCard $keywordCard): static
    {
        if ($this->keywordCards->removeElement($keywordCard)) {
            // set the owning side to null (unless already changed)
            if ($keywordCard->getKeyword() === $this) {
                $keywordCard->setKeyword(null);
            }
        }

        return $this;
    }
}
