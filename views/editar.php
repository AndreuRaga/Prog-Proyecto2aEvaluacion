<!DOCTYPE html>
<html>
<head>
    <title>Editar personaje</title>
</head>
<body>
    <h1>Editar personaje</h1>

    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?=$personaje->getNombre()?>" required>
        <br><br>
        <label>Vida:</label>
        <input type="number" name="vida" value="<?=$personaje->getVida()?>" required>
        <br><br>
        <label>Nivel:</label>
        <input type="number" name="nivel" value="<?=$personaje->getNivel()?>" required>
        <br><br>

        <?php if ($personaje instanceof Guerrero): ?>
            <label>Fuerza:</label>
            <input type="number" name="fuerza" value="<?=$personaje->getFuerza()?>" required>
            <br><br>
            <label>Arma:</label>
            <input type="text" name="arma" value="<?=$personaje->getArma()?>" required>
            <br><br>
        <?php endif; ?>

        <?php if ($personaje instanceof Mago): ?>
            <label>Mana:</label>
            <input type="number" name="mana" value="<?=$personaje->getMana()?>" required>
            <br><br>
            <label>Elemento:</label>
            <select name="elemento" required>
                <option value="Fuego" <?= $personaje->getElemento() === 'Fuego' ? 'selected' : '' ?>>Fuego</option>
                <option value="Agua" <?= $personaje->getElemento() === 'Agua' ? 'selected' : '' ?>>Agua</option>
                <option value="Tierra" <?= $personaje->getElemento() === 'Tierra' ? 'selected' : '' ?>>Tierra</option>
                <option value="Aire" <?= $personaje->getElemento() === 'Aire' ? 'selected' : '' ?>>Aire</option>
            </select>
            <br><br>
        <?php endif; ?>                     
        
        <input type="submit" value="Editar">
    </form>
    <br>
    <a href="index.php">Volver al listado</a>
</body>
</html>