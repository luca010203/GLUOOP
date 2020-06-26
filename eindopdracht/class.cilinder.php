<?php
class Cilinder extends Figuur {
    /**
     * 
     * 
     */

    public function __construct( float $Ih,  float $Ir)
    {
        parent::__construct($Ih, $Ir);
        $this->seth($Ih);
        $this->setR($Ir);
    }
   

    public function getH($Ih) {
        $this->setH($Ih);
        echo $Ih;
    }
    public function getR($Ir){
        $this->setR($Ir);
    }

    public function setH($Ih) {
        if(!is_int($Ih)) {
            die('dit gaat niet');
      }
      $this->h= $Ih;
    }
    public function setR($Ir) {
        if(!is_int($Ir)) {
            die('dit gaat niet');
      }
      $this->r= $Ir;
    }
    public function berekenoppervlakte() {
        $opp = (2 * Figuur::$PI * $this->r * $this->r) + (2 * Figuur::$PI * $this->r * $this->h);
        
        return $opp;
    }

}

?>