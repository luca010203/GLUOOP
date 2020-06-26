<?php 
abstract class Figuur {
    public static $PI = 3.1415;
    protected $x;
    protected $y;
    private $omschrijving;
    
    abstract public function berekenOppervlakte();
    

    public function __construct($Ix ,$Iy){
        $this->setX($Ix);
        $this->setY($Iy);
        
        
    }   
    public function setX($Ix) {
        if(!is_int($Ix)&& !is_int($Ix)) {
            die('Ix is geen int');
      }
        $this->x= $Ix;
    }
    public function setY($Iy) {
        if(!is_int($Iy)&& !is_int($Iy)) {
            die ('Iy is geen int');
        }
        $this->y=$Iy;
    }

    public function getOmschrijving() {

    }

    public function setOmschrijving($omschrijving){
       if(!is_string($omschrijving)) {
        die('dit is geen omschrijving');
       }
       $this->omschrijving = $omschrijving;
    }

}

?>