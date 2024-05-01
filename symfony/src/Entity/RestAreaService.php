<?php

namespace App\Entity;

use ApiPlatform\Metadata as Api;
use App\Repository\RestAreaServiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestAreaServiceRepository::class)]
#[Api\ApiResource(
    operations: [
        new Api\GetCollection(),
        new Api\Get(),
    ]
)]
class RestAreaService
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'restAreaServices')]
    #[ORM\JoinColumn(nullable: false)]
    private ?RestArea $rest_area_id = null;

    #[ORM\ManyToOne(inversedBy: 'restAreaServices')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $service_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRestAreaId(): ?RestArea
    {
        return $this->rest_area_id;
    }

    public function setRestAreaId(?RestArea $rest_area_id): static
    {
        $this->rest_area_id = $rest_area_id;

        return $this;
    }

    public function getServiceId(): ?Service
    {
        return $this->service_id;
    }

    public function setServiceId(?Service $service_id): static
    {
        $this->service_id = $service_id;

        return $this;
    }
}
