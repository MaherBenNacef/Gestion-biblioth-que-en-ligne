<?php


namespace ProjetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity
 */
class Admin
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
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admin", referencedColumnName="id_personne")
     * })
     */
    public $idAdmin;



    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Admin
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
     * @return Admin
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
     * Set idAdmin
     *
     * @param \ProjetBundle\Entity\Personne $idAdmin
     *
     * @return Admin
     */
   /* public function setIdAdmin(\ProjetBundle\Entity\Personne $idAdmin)
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }*/

    /**
     * Get idAdmin
     *
     * @return \ProjetBundle\Entity\Personne
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }
}
