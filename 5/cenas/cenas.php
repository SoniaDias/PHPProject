<?php
class Cenas
{
    var $olaole;

    function __construct($olaole){
        $this->olaole = $olaole;
    }

    function getOlaOle(){
        return $this->olaole;
    }
    
    function setOlaOle($olaole_new){
        $this->olaole = $olaole_new;
    }
    
}

