<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


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
    private ?string $mode = null;

    #[ORM\Column]
    private ?int $capacitemax = null;

    #[ORM\Column(length: 50)]
    private ?string $publiccible = null;

    #[ORM\Column(length: 255)]
    private ?string $lieninscription = null;

    #[ORM\Column(length: 255)]
    private ?string $contactemail = null;

    #[ORM\Column(length: 50)]
    private ?string $contacttelephone = null;

    #[ORM\ManyToOne(inversedBy: 'evenements')]
    #[ORM\JoinColumn(nullable: false)]
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

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(string $mode): static
    {
        $this->mode = $mode;

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

    public function getPubliccible(): ?string
    {
        return $this->publiccible;
    }

    public function setPubliccible(string $publiccible): static
    {
        $this->publiccible = $publiccible;

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
