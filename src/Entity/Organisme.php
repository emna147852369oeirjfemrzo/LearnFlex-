<?php

namespace App\Entity;

use App\Repository\OrganismeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrganismeRepository::class)]
class Organisme
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $typesponsor = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 100)]
    private ?string $siteweb = null;

    #[ORM\Column(length: 100)]
    private ?string $emailcontact = null;

    #[ORM\Column(length: 50)]
    private ?string $telephone = null;

    #[ORM\Column(length: 100)]
    private ?string $localisation = null;

    #[ORM\Column(length: 50)]
    private ?string $statut = null;

    #[ORM\Column(length: 100)]
    private ?string $typefaculte = null;

    #[ORM\Column(length: 100)]
    private ?string $domainesformation = null;

    #[ORM\Column]
    private ?float $fraisetude = null;

    #[ORM\Column]
    private ?int $dureeetudes = null;

    #[ORM\Column(length: 100)]
    private ?string $langueenseignement = null;

    #[ORM\Column(length: 100)]
    private ?string $secteuractivite = null;

    #[ORM\Column(length: 255)]
    private ?string $tailleentreprise = null;

    #[ORM\Column]
    private ?bool $opportunitesstage = null;

    #[ORM\Column]
    private ?bool $opportunitesemploi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    /**
     * @var Collection<int, Evenement>
     */
    #[ORM\OneToMany(targetEntity: Evenement::class, mappedBy: 'organisme', orphanRemoval:true)]
    private Collection $evenement;

    public function __construct()
    {
        $this->evenement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTypesponsor(): ?string
    {
        return $this->typesponsor;
    }

    public function setTypesponsor(string $typesponsor): static
    {
        $this->typesponsor = $typesponsor;

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

    public function getSiteweb(): ?string
    {
        return $this->siteweb;
    }

    public function setSiteweb(string $siteweb): static
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    public function getEmailcontact(): ?string
    {
        return $this->emailcontact;
    }

    public function setEmailcontact(string $emailcontact): static
    {
        $this->emailcontact = $emailcontact;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

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

    public function getTypefaculte(): ?string
    {
        return $this->typefaculte;
    }

    public function setTypefaculte(string $typefaculte): static
    {
        $this->typefaculte = $typefaculte;

        return $this;
    }

    public function getDomainesformation(): ?string
    {
        return $this->domainesformation;
    }

    public function setDomainesformation(string $domainesformation): static
    {
        $this->domainesformation = $domainesformation;

        return $this;
    }

    public function getFraisetude(): ?float
    {
        return $this->fraisetude;
    }

    public function setFraisetude(float $fraisetude): static
    {
        $this->fraisetude = $fraisetude;

        return $this;
    }

    public function getDureeetudes(): ?int
    {
        return $this->dureeetudes;
    }

    public function setDureeetudes(int $dureeetudes): static
    {
        $this->dureeetudes = $dureeetudes;

        return $this;
    }

    public function getLangueenseignement(): ?string
    {
        return $this->langueenseignement;
    }

    public function setLangueenseignement(string $langueenseignement): static
    {
        $this->langueenseignement = $langueenseignement;

        return $this;
    }

    public function getSecteuractivite(): ?string
    {
        return $this->secteuractivite;
    }

    public function setSecteuractivite(string $secteuractivite): static
    {
        $this->secteuractivite = $secteuractivite;

        return $this;
    }

    public function getTailleentreprise(): ?string
    {
        return $this->tailleentreprise;
    }

    public function setTailleentreprise(string $tailleentreprise): static
    {
        $this->tailleentreprise = $tailleentreprise;

        return $this;
    }

    public function isOpportunitesstage(): ?bool
    {
        return $this->opportunitesstage;
    }

    public function setOpportunitesstage(bool $opportunitesstage): static
    {
        $this->opportunitesstage = $opportunitesstage;

        return $this;
    }

    public function isOpportunitesemploi(): ?bool
    {
        return $this->opportunitesemploi;
    }

    public function setOpportunitesemploi(bool $opportunitesemploi): static
    {
        $this->opportunitesemploi = $opportunitesemploi;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection<int, Evenement>
     */
    public function getEvenement(): Collection
    {
        return $this->evenement;
    }

    public function addEvenement(Evenement $evenement): static
    {
        if (!$this->evenement->contains($evenement)) {
            $this->evenement->add($evenement);
            $evenement->setOrganisme($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): static
    {
        if ($this->evenement->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getOrganisme() === $this) {
                $evenement->setOrganisme(null);
            }
        }

        return $this;
    }
}
