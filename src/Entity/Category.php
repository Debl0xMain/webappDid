<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $catName = null;

    #[ORM\Column(length: 255)]
    private ?string $pictureName = null;

    /**
     * @var Collection<int, Subcategory>
     */
    #[ORM\OneToMany(targetEntity: Subcategory::class, mappedBy: 'lien')]
    private Collection $subCategories;

    public function __construct()
    {
        $this->subCategories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatName(): ?string
    {
        return $this->catName;
    }

    public function setCatName(string $catName): static
    {
        $this->catName = $catName;

        return $this;
    }

    public function getPictureName(): ?string
    {
        return $this->pictureName;
    }

    public function setPictureName(string $pictureName): static
    {
        $this->pictureName = $pictureName;

        return $this;
    }

    /**
     * @return Collection<int, Subcategory>
     */
    public function getsubCategories(): Collection
    {
        return $this->subCategories;
    }

    public function addSubcategory(Subcategory $subcategory): static
    {
        if (!$this->subCategories->contains($subcategory)) {
            $this->subCategories->add($subcategory);
            $subcategory->setLien($this);
        }

        return $this;
    }

    public function removeSubcategory(Subcategory $subcategory): static
    {
        if ($this->subCategories->removeElement($subcategory)) {
            // set the owning side to null (unless already changed)
            if ($subcategory->getLien() === $this) {
                $subcategory->setLien(null);
            }
        }

        return $this;
    }
}
