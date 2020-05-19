<?php

namespace App\Entity;

use App\Repository\LigneCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigneCommandeRepository::class)
 */
class LigneCommande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $quantit;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantit(): ?string
    {
        return $this->quantit;
    }

    public function setQuantit(string $quantit): self
    {
        $this->quantit = $quantit;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
