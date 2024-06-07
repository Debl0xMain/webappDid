<?php

namespace App\Entity;

use App\Repository\NewletterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewletterRepository::class)]
class Newletter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $mailList = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailList(): ?string
    {
        return $this->mailList;
    }

    public function setMailList(string $mailList): static
    {
        $this->mailList = $mailList;

        return $this;
    }
}
