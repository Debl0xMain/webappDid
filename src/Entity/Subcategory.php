<?php

namespace App\Entity;

use App\Repository\SubcategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubcategoryRepository::class)]
class Subcategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $subName = null;

    #[ORM\Column(length: 255)]
    private ?string $subPictureName = null;

    #[ORM\ManyToOne(inversedBy: 'subCategories')]
    private ?Category $lien = null;

    /**
     * @var Collection<int, Produits>
     */
    #[ORM\OneToMany(targetEntity: Produits::class, mappedBy: 'produit_relation')]
    private Collection $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubName(): ?string
    {
        return $this->subName;
    }

    public function setSubName(string $subName): static
    {
        $this->subName = $subName;

        return $this;
    }

    public function getSubPictureName(): ?string
    {
        return $this->subPictureName;
    }

    public function setSubPictureName(string $subPictureName): static
    {
        $this->subPictureName = $subPictureName;

        return $this;
    }

    public function getLien(): ?Category
    {
        return $this->lien;
    }

    public function setLien(?Category $lien): static
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * @return Collection<int, Produits>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produits $produit): static
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->setProduitRelation($this);
        }

        return $this;
    }

    public function removeProduit(Produits $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getProduitRelation() === $this) {
                $produit->setProduitRelation(null);
            }
        }

        return $this;
    }
}
