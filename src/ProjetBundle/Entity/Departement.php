<?php


namespace ProjetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_departement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="code_departement", type="string", length=20, nullable=false)
     */
    public $codeDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="design_departement", type="string", length=50, nullable=false)
     */
    public $designDepartement;



    /**
     * Get idDepartement
     *
     * @return integer
     */
    public function getIdDepartement()
    {
        return $this->idDepartement;
    }

    /**
     * Set codeDepartement
     *
     * @param string $codeDepartement
     *
     * @return Departement
     */
    public function setCodeDepartement($codeDepartement)
    {
        $this->codeDepartement = $codeDepartement;

        return $this;
    }

    /**
     * Get codeDepartement
     *
     * @return string
     */
    public function getCodeDepartement()
    {
        return $this->codeDepartement;
    }

    /**
     * Set designDepartement
     *
     * @param string $designDepartement
     *
     * @return Departement
     */
    public function setDesignDepartement($designDepartement)
    {
        $this->designDepartement = $designDepartement;

        return $this;
    }

    /**
     * Get designDepartement
     *
     * @return string
     */
    public function getDesignDepartement()
    {
        return $this->designDepartement;
    }
}
