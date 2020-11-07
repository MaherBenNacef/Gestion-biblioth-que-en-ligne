<?php


namespace ProjetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne", indexes={@ORM\Index(name="FK_app01", columns={"departement_id"})})
 * @ORM\Entity
 */
class Personne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_personne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_prenom_fr", type="string", length=50, nullable=false)
     */
    public $nomPrenomFr;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_prenom_ar", type="string", length=50, nullable=true)
     */
    public $nomPrenomAr;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite_fr", type="string", length=10, nullable=true)
     */
    public $civiliteFr;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite_ar", type="string", length=20, nullable=true)
     */
    public $civiliteAr;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=false)
     */
    public $sexe = 'H';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naiss", type="date", nullable=false)
     */
    public $dateNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=20, nullable=false)
     */
    public $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=true)
     */
    public $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    public $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=15, nullable=true)
     */
    public $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=1, nullable=false)
     */
    public $etat = 'A';

    /**
     * @var \Departement
     *
     * @ORM\ManyToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departement_id", referencedColumnName="id_departement")
     * })
     */
    public $departement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ouvrage", inversedBy="personne")
     * @ORM\JoinTable(name="favoris",
     *   joinColumns={
     *     @ORM\JoinColumn(name="personne_id", referencedColumnName="id_personne")
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
     * Get idPersonne
     *
     * @return integer
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * Set nomPrenomFr
     *
     * @param string $nomPrenomFr
     *
     * @return Personne
     */
    public function setNomPrenomFr($nomPrenomFr)
    {
        $this->nomPrenomFr = $nomPrenomFr;

        return $this;
    }

    /**
     * Get nomPrenomFr
     *
     * @return string
     */
    public function getNomPrenomFr()
    {
        return $this->nomPrenomFr;
    }

    /**
     * Set nomPrenomAr
     *
     * @param string $nomPrenomAr
     *
     * @return Personne
     */
    public function setNomPrenomAr($nomPrenomAr)
    {
        $this->nomPrenomAr = $nomPrenomAr;

        return $this;
    }

    /**
     * Get nomPrenomAr
     *
     * @return string
     */
    public function getNomPrenomAr()
    {
        return $this->nomPrenomAr;
    }

    /**
     * Set civiliteFr
     *
     * @param string $civiliteFr
     *
     * @return Personne
     */
    public function setCiviliteFr($civiliteFr)
    {
        $this->civiliteFr = $civiliteFr;

        return $this;
    }

    /**
     * Get civiliteFr
     *
     * @return string
     */
    public function getCiviliteFr()
    {
        return $this->civiliteFr;
    }

    /**
     * Set civiliteAr
     *
     * @param string $civiliteAr
     *
     * @return Personne
     */
    public function setCiviliteAr($civiliteAr)
    {
        $this->civiliteAr = $civiliteAr;

        return $this;
    }

    /**
     * Get civiliteAr
     *
     * @return string
     */
    public function getCiviliteAr()
    {
        return $this->civiliteAr;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Personne
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     *
     * @return Personne
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return Personne
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Personne
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Personne
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     *
     * @return Personne
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Personne
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set departement
     *
     * @param \ProjetBundle\Entity\Departement $departement
     *
     * @return Personne
     */
    public function setDepartement(\ProjetBundle\Entity\Departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \ProjetBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Add ouvrage
     *
     * @param \ProjetBundle\Entity\Ouvrage $ouvrage
     *
     * @return Personne
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
