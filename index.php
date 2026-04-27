<?php
    require_once 'autoload.php';
    session_start();
    
    $gestor = new GestorPDO();
    $personajeController = new PersonajeController($gestor);
    $usuarioController = new UsuarioController($gestor);

    $accion = $_GET['accion'] ?? 'index';

    switch ($accion) {
        //Gestión de usuarios
        case 'login':
            $usuarioController->login();
            break;
        case 'alta':
            $usuarioController->alta();
            break;
        case 'logout':
            $usuarioController->logout();
            break;
        
        //Gestión de personajes
        case 'agregar':
            $personajeController->agregar();
            break;
        case 'editar':
            $personajeController->editar();
            break;
        case 'eliminar':
            $personajeController->eliminar();
            break;
        default:
            $personajeController->index();
            break;
    }
?>