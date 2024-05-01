<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata as Api;
use App\Repository\RestAreaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: RestAreaRepository::class)]
#[Api\ApiResource(
    normalizationContext: [
        'groups' => [
            'read_rest_area'
        ]
    ],
    operations: [
        new Api\GetCollection(),
        new Api\Get(),
    ]
)]
#[Api\ApiFilter(SearchFilter::class, properties: [ 'name' => 'ipartial' ])]
class RestArea
{
    use TimestampableEntity;
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read_rest_area'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read_rest_area'])]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['read_rest_area'])]
    private ?string $description = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Groups(['read_rest_area'])]
    private ?float $latitude = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Groups(['read_rest_area'])]
    private ?float $longitude = null;

    /**
     * @var Collection<int, Photo>
     */
    #[ORM\OneToMany(targetEntity: Photo::class, mappedBy: 'restArea_id', orphanRemoval: true)]
    #[Groups(['read_rest_area'])]
    private Collection $photos;

    /**
     * @var Collection<int, RestAreaService>
     */
    #[ORM\OneToMany(targetEntity: RestAreaService::class, mappedBy: 'rest_area_id', orphanRemoval: true)]
    private Collection $restAreaServices;

    /**
     * @var Collection<int, Feedback>
     */
    #[ORM\OneToMany(targetEntity: Feedback::class, mappedBy: 'rest_area_id', orphanRemoval: true)]
    private Collection $feedback;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
        $this->restAreaServices = new ArrayCollection();
        $this->feedback = new ArrayCollection();
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

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return Collection<int, Photo>
     */
    public function getPhotos(): Collection
    {
        return $this->photos;
    }

    public function addPhoto(Photo $photo): static
    {
        if (!$this->photos->contains($photo)) {
            $this->photos->add($photo);
            $photo->setRestAreaId($this);
        }

        return $this;
    }

    public function removePhoto(Photo $photo): static
    {
        if ($this->photos->removeElement($photo)) {
 
            if ($photo->getRestAreaId() === $this) {
                $photo->setRestAreaId(null);
            }
        }

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
            $restAreaService->setRestAreaId($this);
        }

        return $this;
    }

    public function removeRestAreaService(RestAreaService $restAreaService): static
    {
        if ($this->restAreaServices->removeElement($restAreaService)) {
            // set the owning side to null (unless already changed)
            if ($restAreaService->getRestAreaId() === $this) {
                $restAreaService->setRestAreaId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Feedback>
     */
    public function getFeedback(): Collection
    {
        return $this->feedback;
    }

    public function addFeedback(Feedback $feedback): static
    {
        if (!$this->feedback->contains($feedback)) {
            $this->feedback->add($feedback);
            $feedback->setRestAreaId($this);
        }

        return $this;
    }

    public function removeFeedback(Feedback $feedback): static
    {
        if ($this->feedback->removeElement($feedback)) {
            // set the owning side to null (unless already changed)
            if ($feedback->getRestAreaId() === $this) {
                $feedback->setRestAreaId(null);
            }
        }

        return $this;
    }
}
