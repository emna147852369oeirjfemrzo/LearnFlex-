<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTime $datedebut = null;

    #[ORM\Column]
    private ?\DateTime $datefin = null;

    #[ORM\Column(length: 100)]
    private ?string $lieu = null;

    #[ORM\Column(length: 50)]
    private ?string $typeevenement = null;

    #[ORM\Column]
    private ?int $capacitemax = null;

    #[ORM\Column(length: 50)]
    private ?string $typeevent = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heuredebut = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heurefin = null;

    #[ORM\Column(length: 50)]
    private ?string $mode = null;

    #[ORM\Column(length: 50)]
    private ?string $publiccible = null;

    #[ORM\Column(length: 50)]
    private ?string $domainesconcernes = null;

    #[ORM\Column(length: 50)]
    private ?string $organisateur = null;

    #[ORM\Column(length: 100)]
    private ?string $contactemail = null;

    #[ORM\Column(length: 50)]
    private ?string $contacttelephone = null;

    #[ORM\Column(length: 255)]
    private ?string $lieninscription = null;

    #[ORM\Column(length: 50)]
    private ?string $statut = null;

    #[ORM\ManyToOne(targetEntity: Organisme::class, inversedBy: 'evenement')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Organisme $organisme = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDatedebut(): ?\DateTime
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTime $datedebut): static
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTime
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTime $datefin): static
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getTypeevenement(): ?string
    {
        return $this->typeevenement;
    }

    public function setTypeevenement(string $typeevenement): static
    {
        $this->typeevenement = $typeevenement;

        return $this;
    }

    public function getCapacitemax(): ?int
    {
        return $this->capacitemax;
    }

    public function setCapacitemax(int $capacitemax): static
    {
        $this->capacitemax = $capacitemax;

        return $this;
    }

    public function getTypeevent(): ?string
    {
        return $this->typeevent;
    }

    public function setTypeevent(string $typeevent): static
    {
        $this->typeevent = $typeevent;

        return $this;
    }

    public function getHeuredebut(): ?\DateTime
    {
        return $this->heuredebut;
    }

    public function setHeuredebut(\DateTime $heuredebut): static
    {
        $this->heuredebut = $heuredebut;

        return $this;
    }

    public function getHeurefin(): ?\DateTime
    {
        return $this->heurefin;
    }

    public function setHeurefin(\DateTime $heurefin): static
    {
        $this->heurefin = $heurefin;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(string $mode): static
    {
        $this->mode = $mode;

        return $this;
    }

    

    public function __construct()
    {
        // Valeur par défaut, si nécessaire
        $this->publiccible = ''; 
    }

    public function getPubliccible(): ?string
    {
        return $this->publiccible;
    }

    public function setPubliccible(?string $publiccible): self
    {
        $this->publiccible = $publiccible;
        return $this;
    }

    public function getDomainesconcernes(): ?string
    {
        return $this->domainesconcernes;
    }

    public function setDomainesconcernes(string $domainesconcernes): static
    {
        $this->domainesconcernes = $domainesconcernes;

        return $this;
    }

    public function getOrganisateur(): ?string
    {
        return $this->organisateur;
    }

    public function setOrganisateur(string $organisateur): static
    {
        $this->organisateur = $organisateur;

        return $this;
    }

    public function getContactemail(): ?string
    {
        return $this->contactemail;
    }

    public function setContactemail(string $contactemail): static
    {
        $this->contactemail = $contactemail;

        return $this;
    }

    public function getContacttelephone(): ?string
    {
        return $this->contacttelephone;
    }

    public function setContacttelephone(string $contacttelephone): static
    {
        $this->contacttelephone = $contacttelephone;

        return $this;
    }

    public function getLieninscription(): ?string
    {
        return $this->lieninscription;
    }

    public function setLieninscription(string $lieninscription): static
    {
        $this->lieninscription = $lieninscription;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getOrganisme(): ?Organisme
    {
        return $this->organisme;
    }

    public function setOrganisme(?Organisme $organisme): static
    {
        $this->organisme = $organisme;

        return $this;
    }
}
