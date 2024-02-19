<?php

namespace App\Entity;

use App\Repository\KeywordCardRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KeywordCardRepository::class)]
class KeywordCard
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'keywordCards')]
    private ?Card $card = null;

    #[ORM\ManyToOne(inversedBy: 'keywordCards')]
    private ?Keyword $keyword = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }

    public function setCard(?Card $card): static
    {
        $this->card = $card;

        return $this;
    }

    public function getKeyword(): ?Keyword
    {
        return $this->keyword;
    }

    public function setKeyword(?Keyword $keyword): static
    {
        $this->keyword = $keyword;

        return $this;
    }
}
