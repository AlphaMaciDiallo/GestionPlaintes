<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="formation")
 **/
class Infraction
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;
    /** @Column(type="string") **/
    private $date;
    /** @Column(type="string") **/
    private $dateEnregistrement;
    /** @Column(type="string") **/
    private $classee;
    
    /**
     * Many Infractions have one Concerne. This is the owning side.
     * @ManyToOne(targetEntity="Concerne", inversedBy="infractions")
     * @JoinColumn(name="Concerne_id", referencedColumnName="id")
     */
    private $users;

    /**
     * Many Infractions have Many Concernes.
     * @ManyToMany(targetEntity="Concerne", inversedBy="infractions")
     * @JoinTable(name="users_id")
     */
    private $concernes;
    
    public function __construct()
    {
        $this->concernes = new ArrayCollection();
        $this->users = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;
    }
    
    public function getClassee()
    {
        return $this->classee;
    }
    public function setClassee($classee)
    {
        $this->classee = $slassee;
    }

    public function getUsers()
    {
        return $this->users;
    }
    public function setUsers($users)
    {
        $this->users = $users;
    }

    public function getConcernes()
    {
        return $this->concernes;
    }
    public function setConcernes($concernes)
    {
        $this->concernes = $concernes;
    }

}

?>