<?php


namespace ProjetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Motscles
 *
 * @ORM\Table(name="motscles")
 * @ORM\Entity
 */
class Motscles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_mots_cles", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idMotsCles;

    /**
     * @var string
     *
     * @ORM\Column(name="design_mots_cles", type="string", length=50, nullable=false)
     */
    public $designMotsCles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ouvrage", inversedBy="motsCles")
     * @ORM\JoinTable(name="motscles_ouvrage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="mots_cles_id", referencedColumnName="id_mots_cles")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ouvrage_id", referencedColumnName="id_ouvrage")
     *   }
     * )
     */
    public $ouvrage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ouvrage = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idMotsCles
     *
     * @return integer
     */
    public function getIdMotsCles()
    {
        return $this->idMotsCles;
    }

    /**
     * Set designMotsCles
     *
     * @param string $designMotsCles
     *
     * @return Motscles
     */
    public function setDesignMotsCles($designMotsCles)
    {
        $this->designMotsCles = $designMotsCles;

        return $this;
    }

    /**
     * Get designMotsCles
     *
     * @return string
     */
    public function getDesignMotsCles()
    {
        return $this->designMotsCles;
    }

    /**
     * Add ouvrage
     *
     * @param \ProjetBundle\Entity\Ouvrage $ouvrage
     *
     * @return Motscles
     */
    public function addOuvrage(\ProjetBundle\Entity\Ouvrage $ouvrage)
    {
        $this->ouvrage[] = $ouvrage;

        return $this;
    }

    /**
     * Remove ouvrage
     *
     * @param \ProjetBundle\Entity\Ouvrage $ouvrage
     */
    public function removeOuvrage(\ProjetBundle\Entity\Ouvrage $ouvrage)
    {
        $this->ouvrage->removeElement($ouvrage);
    }

    /**
     * Get ouvrage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOuvrage()
    {
        return $this->ouvrage;
    }
}
