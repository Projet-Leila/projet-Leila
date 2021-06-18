<?php

namespace App\Entity;

use App\Repository\TgReponseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TgReponseRepository::class)
 */
class TgReponse
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
    private $cv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lm;

    /**
     * @ORM\ManyToOne(targetEntity=TgRecrute::class, inversedBy="tgReponses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reponse;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="tgReponses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): self
    {
        $this->cv = $cv;

        return $this;
    }

    public function getLm(): ?string
    {
        return $this->lm;
    }

    public function setLm(string $lm): self
    {
        $this->lm = $lm;

        return $this;
    }

    public function getReponse(): ?TgRecrute
    {
        return $this->reponse;
    }

    public function setReponse(?TgRecrute $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
