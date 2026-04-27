<?php
class Guerrero extends Personaje {
    private $fuerza;
    private $arma;

    public function __construct($nombre, $vida, $nivel, $fuerza, $arma, $id = null) {
        parent::__construct($nombre, $vida, $nivel, $id);
        $this->fuerza = $fuerza;
        $this->arma = $arma;
    }

    public function getFuerza() {
        return $this->fuerza;
    }

    public function setFuerza($fuerza) {
        $this->fuerza = $fuerza;
    }
    
    public function getArma() {
        return $this->arma;
    }

    public function setArma($arma) {
        $this->arma = $arma;
    }
}