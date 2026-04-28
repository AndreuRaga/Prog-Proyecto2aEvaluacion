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

    public function agregar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $clase = $_POST['clase'];
            $nombre = $_POST['nombre'];
            $vida = $_POST['vida'];
            $nivel = $_POST['nivel'];

            if ($clase === 'Guerrero') {
                $fuerza = $_POST['fuerza'];
                $arma = $_POST['arma'];
                $personaje = new Guerrero($nombre, $vida, $nivel, $fuerza, $arma);
            } else {
                $mana = $_POST['mana'];
                $elemento = $_POST['elemento'];
                $personaje = new Mago($nombre, $vida, $nivel, $mana, $elemento);
            }

            $this->gestor->agregarPersonaje($personaje);

            header('Location: index.php');
            exit();
        }

        include 'views/agregar.php';
    }
}