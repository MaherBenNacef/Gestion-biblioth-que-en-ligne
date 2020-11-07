<?php


namespace ProjetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Telechargement
 *
 * @ORM\Table(name="telechargement", indexes={@ORM\Index(name="FK_app02", columns={"ouvrage_id"}), @ORM\Index(name="FK_app03", columns={"personne_id"})})
 * @ORM\Entity
 */
class Telechargement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_telechargement", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idTelechargement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dh_telechargement", type="datetime", nullable=true)
     */
    public $dhTelechargement;

    /**
     * @var \Ouvrage
     *
     * @ORM\ManyToOne(targetEntity="Ouvrage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ouvrage_id", referencedColumnName="id_ouvrage")
     * })
     */
    public $ouvrage;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="personne_id", referencedColumnName="id_personne")
     * })
     */
    public $personne;



    /**
     * Get idTelechargement
     *
     * @return integer
     */
    public function getIdTelechargement()
    {
        return $this->idTelechargement;
    }

    /**
     * Set dhTelechargement
     *
     * @param \DateTime $dhTelechargement
     *
     * @return Telechargement
     */
    public function setDhTelechargement($dhTelechargement)
    {
        $this->dhTelechargement = $dhTelechargement;

        return $this;
    }

    /**
     * Get dhTelechargement
     *
     * @return \DateTime
     */
    public function getDhTelechargement()
    {
        return $this->dhTelechargement;
    }

    /**
     * Set ouvrage
     *
     * @param \ProjetBundle\Entity\Ouvrage $ouvrage
     *
     * @return Telechargement
     */
    public function setOuvrage(\ProjetBundle\Entity\Ouvrage $ouvrage = null)
    {
        $this->ouvrage = $ouvrage;

        return $this;
    }

    /**
     * Get ouvrage
     *
     * @return \ProjetBundle\Entity\Ouvrage
     */
    public function getOuvrage()
    {
        return $this->ouvrage;
    }

    /**
     * Set personne
     *
     * @param \ProjetBundle\Entity\Personne $personne
     *
     * @return Telechargement
     */
    public function setPersonne(\ProjetBundle\Entity\Personne $personne = null)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \ProjetBundle\Entity\Personne
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
