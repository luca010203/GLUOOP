<?php

class Vierkant extends Figuur
{
    /* 
        @
    */
    public $y, $x;

    public function __construct(float $Ix, float $Iy)
    {
        $this->setX($Ix);
        $this->setY($Iy);
    }
    public function setX($Ix) {
        if(!is_double($Ix)) {
            die('Ix is geen int');
      }
        $this->x= $Ix;
    }
    public function setY($Iy) {
        if(!is_double($Iy)&& !is_int($Iy)) {
            die ('Iy is geen int');
        }
        $this->y=$Iy;
    }
    
    public function berekenoppervlakte() {
        $opp = ($this->x * $this->y);
       
        return $opp;
    }
}


?>