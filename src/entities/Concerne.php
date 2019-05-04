<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"concerne" = "Concerne", "plaignant" = "Plaignant", "miseendemeure" = "Miseendemeure"})
 */

class Concerne
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="integer") **/
    private $tel;

    /**
     * Many Concerne have Many Infractions.
     * @ManyToMany(targetEntity="Infraction", inversedBy="concernes")
     */

    private $infractions;

    public function __construct()
    {
        $this->infractions = new ArrayCollection();
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->id = $tel;
    }

    public function getInfractions()
    {
        return $this->infractions;
    }
    public function setInfractions($id)
    {
        $this->id = $infractions;
    }

}

?>