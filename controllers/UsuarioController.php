<?php
class UsuarioController {
    protected $gestor;

    public function __construct($gestor) {
        $this->gestor = $gestor;
    }

    public function alta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $passwordPlana = $_POST['password'];

            //1. Hasheamos la contraseña
            $passwordHash = password_hash($passwordPlana, PASSWORD_DEFAULT);
            
            //2. Creamos el objeto Usuario (sin ID, porque es nuevo)
            $nuevoUsuario = new Usuario($nombre, $email, $passwordHash);

            //3. Pasamos el objeto al gestor
            $this->gestor->registrarUsuario($nuevoUsuario);

            //4. Iniciamos sesión automáticamente
            $_SESSION['usuario_id'] = $nuevoUsuario->getId();
            $_SESSION['usuario_nombre'] = $nuevoUsuario->getNombre();
            $_SESSION['usuario_email'] = $nuevoUsuario->getEmail();

            header('Location: index.php');
            exit();
        }

        include 'views/alta.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $passwordPlana = $_POST['password'];
            $recordarme = isset($_POST['recordarme']);

            //1. Buscamos al usuario (ahora devuelve un objeto Usuario o false)
            $usuario = $this->gestor->buscarUsuarioPorEmail($email);

            //2. Usamos los Getters del objeto para la validación
            if ($usuario && password_verify($passwordPlana, $usuario->getPassword())) {
                //Login correcto
                $_SESSION['usuario_id'] = $usuario->getId();
                $_SESSION['usuario_nombre'] = $usuario->getNombre();
                $_SESSION['usuario_email'] = $usuario->getEmail();

                //3. Gestion de cookies para "Recordarme"
                if ($recordarme) {
                    //Creamos un token único (pudes guardarlo en BD para más seguridad)
                    $token = base64_encode($usuario->getEmail());

                    // Seteamos la cookie: dura 30 días
                    $this->crearCookie('usuario_login', $token);
                }
                
                header('Location: index.php');
                exit();
            } else {
                $error = "Credenciales incorrectas";
            }
        }

        include 'views/login.php';
    }

    public function logout() {
        //Vaciamos las variables de sesión
        $_SESSION = [];

        //Destruimos la sesión completamente
        session_destroy();

        //Eliminamos la cookie al cerrar sesión
        if (isset($_COOKIE['usuario_login'])) {
            $this->eliminarCookie('usuario_login');
        }

        if (isset($_COOKIE['color_fondo'])) {
            $this->eliminarCookie('color_fondo');
        }

        //Redirigimos al inicio
        header('Location: index.php');
        exit();
    }

    public function cambiarFondo() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $colorFondo = $_POST['colorPicker'];
            $_SESSION['color_fondo'] = $colorFondo;

            // Guardamos el color en una cookie para persistencia a largo plazo
            $this->crearCookie('color_fondo', base64_encode($colorFondo));
        }

        header('Location: index.php');
        exit();
    }

    public function crearCookie($nombre, $valor) {
        setcookie(
            $nombre,
            $valor,
            [
                'expires' => time() + (86400 * 30), // 30 días
                'path' => '/',
                'httponly' => true, // Seguridad: No accesible por JavaScript
                'samesite' => 'Strict'
            ]
        );
    }

    public function eliminarCookie($nombre) {
        setcookie($nombre, '', time() - 3600000, '/');
    }
}