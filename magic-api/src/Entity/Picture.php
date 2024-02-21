<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\Controller\GetPictureController;
use App\Repository\PictureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PictureRepository::class)]
#[ApiResource]
#[Get(
    uriTemplate: '/cards/{id}/picture',
    formats: [
        'png' => 'image/png',
    ],
    controller: GetPictureController::class,
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
class Picture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BLOB)]
    private $picture = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Card $card = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture): static
    {
        $this->picture = $picture;

        return $this;
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
}
