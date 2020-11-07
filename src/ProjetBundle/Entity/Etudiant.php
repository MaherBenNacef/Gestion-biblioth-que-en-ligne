<?php


namespace ProjetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity
 */
class Etudiant
{
    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=20, nullable=true)
     */
    public $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    public $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveau_encours", type="smallint", nullable=true)
     */
    public $niveauEncours;

    /**
     * @var \Personne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id_personne")
     * })
     */
    public $idEtudiant;



    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Etudiant
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Etudiant
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set niveauEncours
     *
     * @param integer $niveauEncours
     *
     * @return Etudiant
     */
    public function setNiveauEncours($niveauEncours)
    {
        $this->niveauEncours = $niveauEncours;

        return $this;
    }

    /**
     * Get niveauEncours
     *
     * @return integer
     */
    public function getNiveauEncours()
    {
        return $this->niveauEncours;
    }

    /**
     * Set idEtudiant
     *
     * @param \ProjetBundle\Entity\Personne $idEtudiant
     *
     * @return Etudiant
     */
    public function setIdEtudiant(\ProjetBundle\Entity\Personne $idEtudiant)
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    /**
     * Get idEtudiant
     *
     * @return \ProjetBundle\Entity\Personne
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }
}
