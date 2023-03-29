<?php

namespace App\Entity;

use App\Repository\RecrutementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecrutementRepository::class)]
class Recrutement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $curriculum_vitae = null;

    #[ORM\Column(length: 255)]
    private ?string $lettre_motiv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurriculumVitae(): ?string
    {
        return $this->curriculum_vitae;
    }

    public function setCurriculumVitae(string $curriculum_vitae): self
    {
        $this->curriculum_vitae = $curriculum_vitae;

        return $this;
    }

    public function getLettreMotiv(): ?string
    {
        return $this->lettre_motiv;
    }

    public function setLettreMotiv(string $lettre_motiv): self
    {
        $this->lettre_motiv = $lettre_motiv;

        return $this;
    }
}
