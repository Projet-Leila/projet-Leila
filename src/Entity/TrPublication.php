<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="tr_publication")
 */
class TrPublication
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
     * @ORM\Column(name="lb_publication", type="string", length=100, nullable=true)
     * @Assert\Length(
     *      max = 100,
     *      maxMessage = "Le titire est limité à {{ limit }} caractères"
     * )
     */
    private $lbPublication;

    /**
     * @ORM\OneToMany(targetEntity="TgRecrute", mappedBy="publications", cascade={"persist", "remove"})
     */
    private $recruteId;

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
     * @return string
     */
    public function getLbPublication(): string
    {
        return $this->lbPublication;
    }

    /**
     * @param string $lbPublication
     */
    public function setLbPublication(string $lbPublication): void
    {
        $this->lbPublication = $lbPublication;
    }

    /**
     * @return mixed
     */
    public function getRecruteId()
    {
        return $this->recruteId;
    }

    /**
     * @param mixed $recruteId
     */
    public function setRecruteId($recruteId): void
    {
        $this->recruteId = $recruteId;
    }

}