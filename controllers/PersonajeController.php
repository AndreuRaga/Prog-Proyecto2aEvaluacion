<?php
class PersonajeController {
    private $gestor;

    public function __construct($gestor) {
        $this->gestor = $gestor;
    }

    public function index() {
        $arrayPersonajes = $this->gestor->obtenerPersonajes();
        include 'views/listar.php';
    }
}