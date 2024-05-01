<?php

namespace App\Entity;

use ApiPlatform\Metadata as Api;
use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
#[Api\ApiResource(
    operations: [
        new Api\GetCollection(),
        new Api\Get(),
    ]
)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, RestAreaService>
     */
    #[ORM\OneToMany(targetEntity: RestAreaService::class, mappedBy: 'service_id', orphanRemoval: true)]
    private Collection $restAreaServices;

    public function __construct()
    {
        $this->restAreaServices = new ArrayCollection();
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

    /**
     * @return Collection<int, RestAreaService>
     */
    public function getRestAreaServices(): Collection
    {
        return $this->restAreaServices;
    }

    public function addRestAreaService(RestAreaService $restAreaService): static
    {
        if (!$this->restAreaServices->contains($restAreaService)) {
            $this->restAreaServices->add($restAreaService);
            $restAreaService->setServiceId($this);
        }

        return $this;
    }

    public function removeRestAreaService(RestAreaService $restAreaService): static
    {
        if ($this->restAreaServices->removeElement($restAreaService)) {
            // set the owning side to null (unless already changed)
            if ($restAreaService->getServiceId() === $this) {
                $restAreaService->setServiceId(null);
            }
        }

        return $this;
    }
}
