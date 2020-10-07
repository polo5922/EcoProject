<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"user_id"}, message="There is already an account with this user_id")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $user_ip;

    /**
     * @ORM\Column(type="datetime")
     */
    private $user_created_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_clics;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $role;

    /**
     * @ORM\ManyToMany(targetEntity=Association::class, mappedBy="ass_members")
     */
    private $associations;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\OneToMany(targetEntity=Association::class, mappedBy="ass_president")
     */
    private $associationsGerees;

    public function __construct()
    {
        $this->associations = new ArrayCollection();
        $this->associationsGerees = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->user_name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name): self
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->user_password;
    }

    public function setUserPassword(string $user_password): self
    {
        $this->user_password = $user_password;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->user_email;
    }

    public function setUserEmail(string $user_email): self
    {
        $this->user_email = $user_email;

        return $this;
    }

    public function getUserIp(): ?string
    {
        return $this->user_ip;
    }

    public function setUserIp(?string $user_ip): self
    {
        $this->user_ip = $user_ip;

        return $this;
    }

    public function getUserCreatedAt(): ?\DateTimeInterface
    {
        return $this->user_created_at;
    }

    public function setUserCreatedAt(\DateTimeInterface $user_created_at): self
    {
        $this->user_created_at = $user_created_at;

        return $this;
    }

    public function getUserClics(): ?int
    {
        return $this->user_clics;
    }

    public function setUserClics(int $user_clics): self
    {
        $this->user_clics = $user_clics;

        return $this;
    }

    public function getRoles(): ?array
    {
        return [$this->role];
    }

    public function setRoles(?string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getUserame(): ?string
    {
        return $this->user_name;
    }

    public function getPassword(){
        return $this->user_password;
    }
    
    public function getSalt(){}

    public function eraseCredentials(){}

    /**
     * @return Collection|Association[]
     */
    public function getAssociations(): Collection
    {
        return $this->associations;
    }

    public function addAssociation(Association $association): self
    {
        if (!$this->associations->contains($association)) {
            $this->associations[] = $association;
            $association->addAssMember($this);
        }

        return $this;
    }

    public function removeAssociation(Association $association): self
    {
        if ($this->associations->contains($association)) {
            $this->associations->removeElement($association);
            $association->removeAssMember($this);
        }

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * @return Collection|Association[]
     */
    public function getAssociationsGerees(): Collection
    {
        return $this->associationsGerees;
    }

    public function addAssociationsGeree(Association $associationsGeree): self
    {
        if (!$this->associationsGerees->contains($associationsGeree)) {
            $this->associationsGerees[] = $associationsGeree;
            $associationsGeree->setAssPresident($this);
        }

        return $this;
    }

    public function removeAssociationsGeree(Association $associationsGeree): self
    {
        if ($this->associationsGerees->contains($associationsGeree)) {
            $this->associationsGerees->removeElement($associationsGeree);
            // set the owning side to null (unless already changed)
            if ($associationsGeree->getAssPresident() === $this) {
                $associationsGeree->setAssPresident(null);
            }
        }

        return $this;
    }
}
