<?php
class Personaje {
    protected $id;
    protected $nombre;
    protected $vida;
    protected $nivel;

    public function __construct($nombre, $vida, $nivel, $id = null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->nivel = $nivel;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getVida() {
        return $this->vida;
    }

    public function setVida($vida) {
        $this->vida = $vida;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }
}