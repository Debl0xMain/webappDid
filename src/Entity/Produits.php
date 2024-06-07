<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $produitName = null;

    #[ORM\Column(length: 255)]
    private ?string $produitDesc = null;

    #[ORM\Column(length: 255)]
    private ?string $produitCaract = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $produitPrice = null;

    #[ORM\Column(length: 255)]
    private ?string $produitPicture = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Subcategory $produit_relation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduitName(): ?string
    {
        return $this->produitName;
    }

    public function setProduitName(string $produitName): static
    {
        $this->produitName = $produitName;

        return $this;
    }

    public function getProduitDesc(): ?string
    {
        return $this->produitDesc;
    }

    public function setProduitDesc(string $produitDesc): static
    {
        $this->produitDesc = $produitDesc;

        return $this;
    }

    public function getProduitCaract(): ?string
    {
        return $this->produitCaract;
    }

    public function setProduitCaract(string $produitCaract): static
    {
        $this->produitCaract = $produitCaract;

        return $this;
    }

    public function getProduitPrice(): ?string
    {
        return $this->produitPrice;
    }

    public function setProduitPrice(string $produitPrice): static
    {
        $this->produitPrice = $produitPrice;

        return $this;
    }

    public function getProduitPicture(): ?string
    {
        return $this->produitPicture;
    }

    public function setProduitPicture(string $produitPicture): static
    {
        $this->produitPicture = $produitPicture;

        return $this;
    }

    public function getProduitRelation(): ?Subcategory
    {
        return $this->produit_relation;
    }

    public function setProduitRelation(?Subcategory $produit_relation): static
    {
        $this->produit_relation = $produit_relation;

        return $this;
    }
}
