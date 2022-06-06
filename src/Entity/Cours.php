<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_cours;

    /**
     * @ORM\Column(type="date")
     */
    private $contenu_cours;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCours(): ?string
    {
        return $this->nom_cours;
    }

    public function setNomCours(string $nom_cours): self
    {
        $this->nom_cours = $nom_cours;

        return $this;
    }

    public function getContenuCours(): ?\DateTimeInterface
    {
        return $this->contenu_cours;
    }

    public function setContenuCours(\DateTimeInterface $contenu_cours): self
    {
        $this->contenu_cours = $contenu_cours;

        return $this;
    }
}
