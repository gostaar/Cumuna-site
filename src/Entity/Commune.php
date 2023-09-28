<?php

namespace App\Entity;

use App\Repository\CommuneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommuneRepository::class)]
class Commune
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $cumuna = null;

    #[ORM\Column(length: 255)]
    private ?string $nommaire = null;

    #[ORM\Column(length: 255)]
    private ?string $telfixe = null;

    #[ORM\Column(length: 255)]
    private ?string $tel = null;

    #[ORM\Column(length: 255)]
    private ?string $mail = null;

    #[ORM\Column(length: 255)]
    private ?string $com = null;

    public function __toString(): string
    {
        return $this->cumuna;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCumuna(): ?string
    {
        return $this->cumuna;
    }

    public function setCumuna(string $cumuna): static
    {
        $this->cumuna = $cumuna;

        return $this;
    }

    public function getNommaire(): ?string
    {
        return $this->nommaire;
    }

    public function setNommaire(string $nommaire): static
    {
        $this->nommaire = $nommaire;

        return $this;
    }

    public function getTelfixe(): ?string
    {
        return $this->telfixe;
    }

    public function setTelfixe(string $telfixe): static
    {
        $this->telfixe = $telfixe;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getCom(): ?string
    {
        return $this->com;
    }

    public function setCom(string $com): static
    {
        $this->com = $com;

        return $this;
    }
}
