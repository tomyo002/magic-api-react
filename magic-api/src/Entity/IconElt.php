<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\Controller\GetElementIconController;
use App\Repository\IconEltRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IconEltRepository::class)]
#[ApiResource]
#[Get(
    uriTemplate: '/elements/{id}/icon',
    formats: [
        'png' => 'image/png',
    ],
    controller: GetElementIconController::class,
    openapiContext: [
        'content' => [
            'image/png' => [
                'schema' => [
                    'type' => 'string',
                    'format' => 'binary',
                ],
            ],
        ],
    ],
)]
class IconElt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BLOB)]
    private $icon = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Element $element = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getElement(): ?Element
    {
        return $this->element;
    }

    public function setElement(?Element $element): static
    {
        $this->element = $element;

        return $this;
    }
}
