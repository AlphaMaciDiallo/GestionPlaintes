<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 **/
class MiseEnDemeure extends Concerne
{
    
    public function __construct()
    {
        //$this->formations = new ArrayCollection();
        parent::__construct();
    }
    
    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre)
    {
        $this->cni = $genre;
    }
}

?>