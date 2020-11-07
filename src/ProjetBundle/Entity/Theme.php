<?php


namespace ProjetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 *
 * @ORM\Table(name="theme")
 * @ORM\Entity
 */
class Theme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_theme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idTheme;

    /**
     * @var string
     *
     * @ORM\Column(name="design_theme", type="string", length=50, nullable=false)
     */
    public $designTheme;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_theme", type="string", length=255, nullable=true)
     */
    public $descTheme;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ouvrage", mappedBy="theme")
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
     * Get idTheme
     *
     * @return integer
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }

    /**
     * Set designTheme
     *
     * @param string $designTheme
     *
     * @return Theme
     */
    public function setDesignTheme($designTheme)
    {
        $this->designTheme = $designTheme;

        return $this;
    }

    /**
     * Get designTheme
     *
     * @return string
     */
    public function getDesignTheme()
    {
        return $this->designTheme;
    }

    /**
     * Set descTheme
     *
     * @param string $descTheme
     *
     * @return Theme
     */
    public function setDescTheme($descTheme)
    {
        $this->descTheme = $descTheme;

        return $this;
    }

    /**
     * Get descTheme
     *
     * @return string
     */
    public function getDescTheme()
    {
        return $this->descTheme;
    }

    /**
     * Add ouvrage
     *
     * @param \ProjetBundle\Entity\Ouvrage $ouvrage
     *
     * @return Theme
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
