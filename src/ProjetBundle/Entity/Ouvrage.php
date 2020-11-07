<?php


namespace ProjetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ouvrage
 *
 * @ORM\Table(name="ouvrage")
 * @ORM\Entity
 */
class Ouvrage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ouvrage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idOuvrage;

    /**
     * @var string
     *
     * @ORM\Column(name="type_ouvrage", type="string", length=50, nullable=false)
     */
    public $typeOuvrage;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    public $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="maison_publication", type="string", length=50, nullable=false)
     */
    public $maisonPublication;

    /**
     * @var string
     *
     * @ORM\Column(name="couverture", type="string", length=255, nullable=false)
     */
    public $couverture;

    /**
     * @var string
     *
     * @ORM\Column(name="resumee", type="string", length=4096, nullable=false)
     */
    public $resumee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sortie", type="date", nullable=true)
     */
    public $dateSortie;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_pages", type="integer", nullable=true)
     */
    public $nbrePages;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_telechargement", type="string", length=255, nullable=false)
     */
    public $lienTelechargement;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="bigint", nullable=false)
     */
    public $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="supprimee", type="string", length=1, nullable=true)
     */
    public $supprimee = 'N';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    public $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_telechargement", type="bigint", nullable=true)
     */
    public $nbreTelechargement = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_vue", type="bigint", nullable=true)
     */
    public $nbreVue = '0';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personne", mappedBy="ouvrage")
     */
    public $personne;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Motscles", mappedBy="ouvrage")
     */
    public $motsCles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Theme", inversedBy="ouvrage")
     * @ORM\JoinTable(name="theme_ouvrage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ouvrage_id", referencedColumnName="id_ouvrage")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="theme_id", referencedColumnName="id_theme")
     *   }
     * )
     */
    public $theme;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personne = new \Doctrine\Common\Collections\ArrayCollection();
        $this->motsCles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->theme = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idOuvrage
     *
     * @return integer
     */
    public function getIdOuvrage()
    {
        return $this->idOuvrage;
    }

    /**
     * Set typeOuvrage
     *
     * @param string $typeOuvrage
     *
     * @return Ouvrage
     */
    public function setTypeOuvrage($typeOuvrage)
    {
        $this->typeOuvrage = $typeOuvrage;

        return $this;
    }

    /**
     * Get typeOuvrage
     *
     * @return string
     */
    public function getTypeOuvrage()
    {
        return $this->typeOuvrage;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Ouvrage
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set maisonPublication
     *
     * @param string $maisonPublication
     *
     * @return Ouvrage
     */
    public function setMaisonPublication($maisonPublication)
    {
        $this->maisonPublication = $maisonPublication;

        return $this;
    }

    /**
     * Get maisonPublication
     *
     * @return string
     */
    public function getMaisonPublication()
    {
        return $this->maisonPublication;
    }

    /**
     * Set couverture
     *
     * @param string $couverture
     *
     * @return Ouvrage
     */
    public function setCouverture($couverture)
    {
        $this->couverture = $couverture;

        return $this;
    }

    /**
     * Get couverture
     *
     * @return string
     */
    public function getCouverture()
    {
        return $this->couverture;
    }

    /**
     * Set resumee
     *
     * @param string $resumee
     *
     * @return Ouvrage
     */
    public function setResumee($resumee)
    {
        $this->resumee = $resumee;

        return $this;
    }

    /**
     * Get resumee
     *
     * @return string
     */
    public function getResumee()
    {
        return $this->resumee;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     *
     * @return Ouvrage
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set nbrePages
     *
     * @param integer $nbrePages
     *
     * @return Ouvrage
     */
    public function setNbrePages($nbrePages)
    {
        $this->nbrePages = $nbrePages;

        return $this;
    }

    /**
     * Get nbrePages
     *
     * @return integer
     */
    public function getNbrePages()
    {
        return $this->nbrePages;
    }

    /**
     * Set lienTelechargement
     *
     * @param string $lienTelechargement
     *
     * @return Ouvrage
     */
    public function setLienTelechargement($lienTelechargement)
    {
        $this->lienTelechargement = $lienTelechargement;

        return $this;
    }

    /**
     * Get lienTelechargement
     *
     * @return string
     */
    public function getLienTelechargement()
    {
        return $this->lienTelechargement;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     *
     * @return Ouvrage
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set supprimee
     *
     * @param string $supprimee
     *
     * @return Ouvrage
     */
    public function setSupprimee($supprimee)
    {
        $this->supprimee = $supprimee;

        return $this;
    }

    /**
     * Get supprimee
     *
     * @return string
     */
    public function getSupprimee()
    {
        return $this->supprimee;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Ouvrage
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set nbreTelechargement
     *
     * @param integer $nbreTelechargement
     *
     * @return Ouvrage
     */
    public function setNbreTelechargement($nbreTelechargement)
    {
        $this->nbreTelechargement = $nbreTelechargement;

        return $this;
    }

    /**
     * Get nbreTelechargement
     *
     * @return integer
     */
    public function getNbreTelechargement()
    {
        return $this->nbreTelechargement;
    }

    /**
     * Set nbreVue
     *
     * @param integer $nbreVue
     *
     * @return Ouvrage
     */
    public function setNbreVue($nbreVue)
    {
        $this->nbreVue = $nbreVue;

        return $this;
    }

    /**
     * Get nbreVue
     *
     * @return integer
     */
    public function getNbreVue()
    {
        return $this->nbreVue;
    }

    /**
     * Add personne
     *
     * @param \ProjetBundle\Entity\Personne $personne
     *
     * @return Ouvrage
     */
    public function addPersonne(\ProjetBundle\Entity\Personne $personne)
    {
        $this->personne[] = $personne;

        return $this;
    }

    /**
     * Remove personne
     *
     * @param \ProjetBundle\Entity\Personne $personne
     */
    public function removePersonne(\ProjetBundle\Entity\Personne $personne)
    {
        $this->personne->removeElement($personne);
    }

    /**
     * Get personne
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonne()
    {
        return $this->personne;
    }

    /**
     * Add motsCle
     *
     * @param \ProjetBundle\Entity\Motscles $motsCle
     *
     * @return Ouvrage
     */
    public function addMotsCle(\ProjetBundle\Entity\Motscles $motsCle)
    {
        $this->motsCles[] = $motsCle;

        return $this;
    }

    /**
     * Remove motsCle
     *
     * @param \ProjetBundle\Entity\Motscles $motsCle
     */
    public function removeMotsCle(\ProjetBundle\Entity\Motscles $motsCle)
    {
        $this->motsCles->removeElement($motsCle);
    }

    /**
     * Get motsCles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMotsCles()
    {
        return $this->motsCles;
    }

    /**
     * Add theme
     *
     * @param \ProjetBundle\Entity\Theme $theme
     *
     * @return Ouvrage
     */
    public function addTheme(\ProjetBundle\Entity\Theme $theme)
    {
        $this->theme[] = $theme;

        return $this;
    }

    /**
     * Remove theme
     *
     * @param \ProjetBundle\Entity\Theme $theme
     */
    public function removeTheme(\ProjetBundle\Entity\Theme $theme)
    {
        $this->theme->removeElement($theme);
    }

    /**
     * Get theme
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTheme()
    {
        return $this->theme;
    }
}
