<!DOCTYPE html>
<html lang="es">
<?php include('header.php'); ?>

<body>
    <h1>Ejercicio 12 Contador de visitas extraterrestres</h1>

    <form class="form-ejercicio" action="ejercicio12_processVisitors.php" method="post">
        <label for="name">Nombre del visitante:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="planet">Planeta de origen:</label>
        <select name="planet" id="planet">
            <option value="Tierra">Tierra</option>
            <option value="Mercurio">Mercurio</option>
            <option value="Venus">Venus</option>
            <option value="Marte">Marte</option>
            <option value="Júpiter">Júpiter</option>
            <option value="Saturno">Saturno</option>
            <option value="Urano">Urano</option>
            <option value="Neptuno">Neptuno</option>
            <option value="Plutón">Plutón</option>
            <option value="Otro">Otro</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>
<?php include('footer.php'); ?>