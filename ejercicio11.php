<!DOCTYPE html>
<html lang="es">
<?php include('header.php'); ?>

<body>
    <h1>Ejercicio 11: Lanzar dados</h1>

    <form action="ejercicio11_rollDice.php" method="post">
        <label for="quantity">Cantidad de dados:</label>
        <select name="quantity" id="quantity">
            <?php
            // Generar opciones para la cantidad de dados
            for ($i = 1; $i <= 6; $i++) {
                echo '<option value="' . $i . '">' . $i . '</option>';
            }
?>
        </select>
        <input type="submit" value="Lanzar dados">
    </form>

</body>
<?php include('footer.php'); ?>

</html>