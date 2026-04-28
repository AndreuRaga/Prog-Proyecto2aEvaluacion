<!DOCTYPE html>
<html>
<head>
    <title>Gestión de personajes</title>
</head>
<body>
    <h1>Agregar personaje</h1>

    <form action="index.php?accion=agregar" method="post">
        <label for="clase">Clase:</label>
        <select id="clase" name="clase" required>
            <option value="Guerrero">Guerrero</option>
            <option value="Mago">Mago</option>
        </select>
        <br><br>
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br><br>
        <label>Vida:</label>
        <input type="number" name="vida" required>
        <br><br>
        <label>Nivel:</label>
        <input type="number" name="nivel" required>
        <br><br>
        <label>Fuerza (guerreros):</label>
        <input type="number" name="fuerza">
        <br><br>
        <label>Arma (guerreros):</label>
        <input type="text" name="arma">
        <br><br>
        <label>Mana (magos):</label>
        <input type="number" name="mana">
        <br><br>
        <label for="elemento">Elemento (magos):</label>
        <select id="elemento" name="elemento">
            <option value="Fuego">Fuego</option>
            <option value="Agua">Agua</option>
            <option value="Tierra">Tierra</option>
            <option value="Aire">Aire</option>
        </select>
        <br><br>
        <a href="index.php">Volver</a>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>