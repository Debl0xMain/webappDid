<?php

namespace App\Entity;

use App\Repository\MotoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MotoRepository::class)]
class Moto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $motoName = null;

    #[ORM\Column]
    private ?int $motoYear = null;

    #[ORM\Column(length: 255)]
    private ?string $motoDesc = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $motoPrice = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $motoOption = [];

    #[ORM\ManyToOne(inversedBy: 'motos')]
    private ?Marque $marque = null;

    #[ORM\Column(length: 255)]
    private ?string $motoPicture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotoName(): ?string
    {
        return $this->motoName;
    }

    public function setMotoName(string $motoName): static
    {
        $this->motoName = $motoName;

        return $this;
    }

    public function getMotoYear(): ?int
    {
        return $this->motoYear;
    }

    public function setMotoYear(int $motoYear): static
    {
        $this->motoYear = $motoYear;

        return $this;
    }

    public function getMotoDesc(): ?string
    {
        return $this->motoDesc;
    }

    public function setMotoDesc(string $motoDesc): static
    {
        $this->motoDesc = $motoDesc;

        return $this;
    }

    public function getMotoPrice(): ?string
    {
        return $this->motoPrice;
    }

    public function setMotoPrice(string $motoPrice): static
    {
        $this->motoPrice = $motoPrice;

        return $this;
    }

    public function getMotoOption(): array
    {
        return $this->motoOption;
    }

    public function setMotoOption(array $motoOption): static
    {
        $this->motoOption = $motoOption;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getMotoPicture(): ?string
    {
        return $this->motoPicture;
    }

    public function setMotoPicture(string $motoPicture): static
    {
        $this->motoPicture = $motoPicture;

        return $this;
    }
}
