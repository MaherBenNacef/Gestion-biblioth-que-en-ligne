<?php


namespace ProjetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table(name="enseignant")
 * @ORM\Entity
 */
class Enseignant
{
    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=false)
     */
    public $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=15, nullable=true)
     */
    public $tel2;

    /**
     * @var \Personne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_enseignant", referencedColumnName="id_personne")
     * })
     */
    public $idEnseignant;



    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Enseignant
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     *
     * @return Enseignant
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set idEnseignant
     *
     * @param \ProjetBundle\Entity\Personne $idEnseignant
     *
     * @return Enseignant
     */
    public function setIdEnseignant(\ProjetBundle\Entity\Personne $idEnseignant)
    {
        $this->idEnseignant = $idEnseignant;

        return $this;
    }

    /**
     * Get idEnseignant
     *
     * @return \ProjetBundle\Entity\Personne
     */
    public function getIdEnseignant()
    {
        return $this->idEnseignant;
    }
}
