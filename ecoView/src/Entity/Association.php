<?php

namespace App\Entity;

use App\Repository\AssociationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="string", length=255)
     */
    private $ass_ville;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="associations")
     */
    private $ass_members;

    public function __construct()
    {
        $this->ass_members = new ArrayCollection();
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
    public function getAssMembers(): Collection
    {
        return $this->ass_members;
    }

    public function addAssMember(User $assMember): self
    {
        if (!$this->ass_members->contains($assMember)) {
            $this->ass_members[] = $assMember;
        }

        return $this;
    }

    public function removeAssMember(User $assMember): self
    {
        if ($this->ass_members->contains($assMember)) {
            $this->ass_members->removeElement($assMember);
        }

        return $this;
    }
}
