<html>
<head>
    <title>Gestión de personajes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Gestión de personajes</h1>
    <div style="background-color: #f8f9fa; padding: 10px; margin-bottom: 20px;">
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <p>Bienvenido/a, <b><?= $_SESSION['usuario_nombre'] ?></b> | <a href="index.php?accion=logout">Cerrar sesión</a></p>
        <?php else: ?>
            <p><a href="index.php?accion=login">Iniciar sesión</a> | <a href="index.php?accion=alta">Registrarse</a></p>
        <?php endif; ?>
    </div>
    <h2>Listado de personajes</h2>
    <?php if (isset($_SESSION['usuario_id'])): ?>
        <a href="index.php?accion=agregar">Agregar personaje</a>
    <?php endif; ?>

    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Clase</th>
                    <th>Nombre</th>
                    <th>Vida</th>
                    <th>Nivel</th>
                    <th>Fuerza</th>
                    <th>Arma</th>
                    <th>Mana</th>
                    <th>Elemento</th>
                    <?php if (isset($_SESSION['usuario_id'])): ?>
                        <th>Opciones</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arrayPersonajes as $personaje): ?>
                    <tr>
                        <td><?=$personaje->getId()?></td>
                        <?php
                        if ($personaje instanceof Guerrero) {
                            echo '<td>' . 'Guerrero' . '</td>';
                        } else {
                            echo '<td>' . 'Mago' . '</td>';
                        }
                        echo '<td>' . $personaje->getNombre() . '</td>';
                        echo '<td>' . $personaje->getVida() . '</td>';
                        echo '<td>' . $personaje->getNivel() . '</td>';
                        
                        if ($personaje instanceof Guerrero) {
                            echo '<td>' . $personaje->getFuerza() . '</td>';
                            echo '<td>' . $personaje->getArma() . '</td>';
                        } else {
                            echo '<td>' . 'N/A' . '</td>';
                            echo '<td>' . 'N/A' . '</td>';
                        }

                        if ($personaje instanceof Mago) {
                            echo '<td>' . $personaje->getMana() . '</td>';
                            echo '<td>' . $personaje->getElemento() . '</td>';
                        } else {
                            echo '<td>' . 'N/A' . '</td>';
                            echo '<td>' . 'N/A' . '</td>';
                        }
                        ?>
                        <?php if (isset($_SESSION['usuario_id'])): ?>
                            <td>
                                <a href="index.php?accion=editar&id=<?=$personaje->getId()?>">Editar</a>
                                <br>
                                <a href="index.php?accion=eliminar&id=<?=$personaje->getId()?>">Eliminar</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>