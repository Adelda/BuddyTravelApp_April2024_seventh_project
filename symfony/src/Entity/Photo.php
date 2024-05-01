<?php

namespace App\Entity;

use ApiPlatform\Metadata as Api;
use App\Repository\PhotoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: PhotoRepository::class)]
#[Api\ApiResource(
    operations: [
        new Api\GetCollection(),
        new Api\Get(),
    ]
)]
class Photo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read_rest_area'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read_rest_area'])]
    private ?string $url = null;

    #[ORM\ManyToOne(inversedBy: 'photos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?RestArea $restArea_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getRestAreaId(): ?RestArea
    {
        return $this->restArea_id;
    }

    public function setRestAreaId(?RestArea $restArea_id): static
    {
        $this->restArea_id = $restArea_id;

        return $this;
    }
}
