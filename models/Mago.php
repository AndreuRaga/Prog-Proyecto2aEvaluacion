<?php
class Mago extends Personaje {
    private $mana;
    private $elemento;

    public function __construct($nombre, $vida, $nivel, $mana, $elemento, $id = null) {
        parent::__construct($nombre, $vida, $nivel, $id);
        $this->mana = $mana;
        $this->elemento = $elemento;
    }

    public function getMana() {
        return $this->mana;
    }

    public function setMana($mana) {
        $this->mana = $mana;
    }

    public function getElemento() {
        return $this->elemento;
    }

    public function setElemento($elemento) {
        $this->elemento = $elemento;
    }
}