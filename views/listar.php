<html>
<head>
    <title>Gestión de personajes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Gestión de personajes</h1>
    
    <h2>Listado de personajes</h2>
        <a href="index.php?accion=agregar">Agregar personaje</a>

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
                    
                    <th>Opciones</th>
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
                        
                            <td>
                                <a href="index.php?accion=editar&id=<?=$personaje->getId()?>">Editar</a>
                                <br>
                                <a href="index.php?accion=eliminar&id=<?=$personaje->getId()?>">Eliminar</a>
                            </td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>