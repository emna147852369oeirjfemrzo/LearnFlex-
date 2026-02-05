<?php

namespace App\Entity;

use App\Repository\ChallengeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChallengeRepository::class)]
class Challenge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titrec = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionc = null;

    #[ORM\Column]
    private ?float $objectifscore = null;

    #[ORM\Column]
    private ?float $progressionactuelle = null;

    #[ORM\Column(length: 50)]
    private ?string $niveaudifficulte = null;

    #[ORM\Column(length: 50)]
    private ?string $niveauatteint = null;

    #[ORM\Column(length: 100)]
    private ?string $typerecomponse = null;

    #[ORM\Column(length: 255)]
    private ?string $contenurecompense = null;

    #[ORM\Column(length: 50)]
    private ?string $etat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dated = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $datef = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $datelimite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $datecreationn = null;

    #[ORM\Column]
    private ?bool $alerte = null;

    #[ORM\ManyToOne(inversedBy: 'challenges')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Examen $examen = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrec(): ?string
    {
        return $this->titrec;
    }
 public function __construct()
    {
        $this->alerte = false;
        $this->progressionactuelle = 0;
        $this->datecreationn = new \DateTime();
    }
    public function setTitrec(string $titrec): static
    {
        $this->titrec = $titrec;

        return $this;
    }

    public function getDescriptionc(): ?string
    {
        return $this->descriptionc;
    }

    public function setDescriptionc(string $descriptionc): static
    {
        $this->descriptionc = $descriptionc;

        return $this;
    }

    public function getObjectifscore(): ?float
    {
        return $this->objectifscore;
    }

    public function setObjectifscore(float $objectifscore): static
    {
        $this->objectifscore = $objectifscore;

        return $this;
    }

    public function getProgressionactuelle(): ?float
    {
        return $this->progressionactuelle;
    }

    public function setProgressionactuelle(float $progressionactuelle): static
    {
        $this->progressionactuelle = $progressionactuelle;

        return $this;
    }

    public function getNiveaudifficulte(): ?string
    {
        return $this->niveaudifficulte;
    }

    public function setNiveaudifficulte(string $niveaudifficulte): static
    {
        $this->niveaudifficulte = $niveaudifficulte;

        return $this;
    }

    public function getNiveauatteint(): ?string
    {
        return $this->niveauatteint;
    }

    public function setNiveauatteint(string $niveauatteint): static
    {
        $this->niveauatteint = $niveauatteint;

        return $this;
    }

    public function getTyperecomponse(): ?string
    {
        return $this->typerecomponse;
    }

    public function setTyperecomponse(string $typerecomponse): static
    {
        $this->typerecomponse = $typerecomponse;

        return $this;
    }

    public function getContenurecompense(): ?string
    {
        return $this->contenurecompense;
    }

    public function setContenurecompense(string $contenurecompense): static
    {
        $this->contenurecompense = $contenurecompense;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDated(): ?\DateTime
    {
        return $this->dated;
    }

    public function setDated(\DateTime $dated): static
    {
        $this->dated = $dated;

        return $this;
    }

    public function getDatef(): ?\DateTime
    {
        return $this->datef;
    }

    public function setDatef(\DateTime $datef): static
    {
        $this->datef = $datef;

        return $this;
    }

    public function getDatelimite(): ?\DateTime
    {
        return $this->datelimite;
    }

    public function setDatelimite(\DateTime $datelimite): static
    {
        $this->datelimite = $datelimite;

        return $this;
    }

    public function getDatecreationn(): ?\DateTime
    {
        return $this->datecreationn;
    }

    public function setDatecreationn(\DateTime $datecreationn): static
    {
        $this->datecreationn = $datecreationn;

        return $this;
    }

    public function isAlerte(): ?bool
    {
        return $this->alerte;
    }

    public function setAlerte(bool $alerte): static
    {
        $this->alerte = $alerte;

        return $this;
    }

    public function getExamen(): ?Examen
    {
        return $this->examen;
    }

    public function setExamen(?Examen $examen): static
    {
        $this->examen = $examen;

        return $this;
    }
}
