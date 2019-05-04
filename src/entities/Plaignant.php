<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 **/
class Plaignant extends Concerne
{
    /** @Column(type="string") **/
    private $cni;

    public function __construct()
    {
        //$this->formations = new ArrayCollection();
        parent::__construct();
    }
    

    public function getCni()
    {
        return $this->cni;
    }
    public function setCni($cni)
    {
        $this->cni = $cni;
    }
}

?>