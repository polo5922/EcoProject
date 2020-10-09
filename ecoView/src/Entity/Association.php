<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AssociationRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=AssociationRepository::class)
 */
class Association
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
    private $ass_nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ass_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ass_description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ass_adresse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ass_cp;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ass_ville;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="associations")
     */
    private $ass_membres;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ass_site;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $ass_created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ass_added_at;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ass_logo;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="associationsGerees")
     */
    private $ass_president;

    public function __construct()
    {
        $this->ass_members = new ArrayCollection();
        $this->ass_added_at = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAssNom(): ?string
    {
        return $this->ass_nom;
    }

    public function setAssNom(string $ass_nom): self
    {
        $this->ass_nom = $ass_nom;

        return $this;
    }

    public function getAssCode(): ?string
    {
        return $this->ass_code;
    }

    public function setAssCode(string $ass_code): self
    {
        $this->ass_code = $ass_code;

        return $this;
    }

    public function getAssDescription(): ?string
    {
        return $this->ass_description;
    }

    public function setAssDescription(string $ass_description): self
    {
        $this->ass_description = $ass_description;

        return $this;
    }

    public function getAssAdresse(): ?string
    {
        return $this->ass_adresse;
    }

    public function setAssAdresse(?string $ass_adresse): self
    {
        $this->ass_adresse = $ass_adresse;

        return $this;
    }

    public function getAssCp(): ?int
    {
        return $this->ass_cp;
    }

    public function setAssCp(?int $ass_cp): self
    {
        $this->ass_cp = $ass_cp;

        return $this;
    }

    public function getAssVille(): ?string
    {
        return $this->ass_ville;
    }

    public function setAssVille(string $ass_ville): self
    {
        $this->ass_ville = $ass_ville;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getAssMembres(): Collection
    {
        return $this->ass_membres;
    }

    public function addAssMember(User $assMembre): self
    {
        if (!$this->ass_membres->contains($assMembre)) {
            $this->ass_membres[] = $assMembre;
        }

        return $this;
    }

    public function removeAssMembre(User $assMembre): self
    {
        if ($this->ass_membres->contains($assMembre)) {
            $this->ass_membres->removeElement($assMembre);
        }

        return $this;
    }

    public function getAssSite(): ?string
    {
        return $this->ass_site;
    }

    public function setAssSite(?string $ass_site): self
    {
        $this->ass_site = $ass_site;

        return $this;
    }

    public function getAssCreatedAt(): ?\DateTimeInterface
    {
        return $this->ass_created_at;
    }

    public function setAssCreatedAt(?\DateTimeInterface $ass_created_at): self
    {
        $this->ass_created_at = $ass_created_at;

        return $this;
    }

    public function getAssAddedAt(): ?\DateTimeInterface
    {
        return $this->ass_added_at;
    }

    public function setAssAddedAt(\DateTimeInterface $ass_added_at): self
    {
        $this->ass_added_at = $ass_added_at;

        return $this;
    }

    public function getAssLogo(): ?string
    {
        return $this->ass_logo;
    }

    public function setAssLogo(?string $ass_logo): self
    {
        $this->ass_logo = $ass_logo;

        return $this;
    }

    public function getAssPresident(): ?User
    {
        return $this->ass_president;
    }

    public function setAssPresident(?User $ass_president): self
    {
        $this->ass_president = $ass_president;

        return $this;
    }
}
