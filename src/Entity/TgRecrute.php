<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="tg_recrute")
 */
class TgRecrute
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="id", initialValue=1)
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="lb_titre", type="string", length=100, nullable=true)
     * @Assert\Length(
     *      max = 100,
     *      maxMessage = "Le titire est limité à {{ limit }} caractères"
     * )
     */
    private $lbTitre;

    /**
     * @var string
     * @ORM\Column(name="lb_description", type="text", nullable=false)
     *
     */
    private $lbDescription;

    /**
     * @var \DateTime
     * @ORM\Column (name="date_publication", type="datetime", nullable=false)
     */
    private $datePublication;


    /**
     * @var \DateTime
     * @ORM\Column (name="date_debut", type="datetime", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     * @ORM\Column (name="date_fin", type="datetime", nullable=false)
     */
    private $dateFin;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="recruteId")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity="TrPublication", inversedBy="recruteId")
     */
    private $publications;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users): void
    {
        $this->users = $users;
    }

    /**
     * @return string
     */
    public function getLbTitre(): string
    {
        return $this->lbTitre;
    }

    /**
     * @param string $lbTitre
     */
    public function setLbTitre(string $lbTitre): void
    {
        $this->lbTitre = $lbTitre;
    }

    /**
     * @return string
     */
    public function getLbDescription(): string
    {
        return $this->lbDescription;
    }

    /**
     * @param string $lbDescription
     */
    public function setLbDescription(string $lbDescription): void
    {
        $this->lbDescription = $lbDescription;
    }

    /**
     * @return \DateTime
     */
    public function getDatePublication(): \DateTime
    {
        return $this->datePublication;
    }

    /**
     * @param \DateTime $datePublication
     */
    public function setDatePublication(\DateTime $datePublication): void
    {
        $this->datePublication = $datePublication;
    }

    /**
     * @return \DateTime
     */
    public function getDateDebut(): \DateTime
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut(\DateTime $dateDebut): void
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin(): \DateTime
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin(\DateTime $dateFin): void
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getPublications()
    {
        return $this->publications;
    }

    /**
     * @param mixed $publications
     */
    public function setPublications($publications): void
    {
        $this->publications = $publications;
    }

}
