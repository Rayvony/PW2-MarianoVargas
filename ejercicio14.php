<!DOCTYPE html>
<?php include('header.php'); ?>

<body>
    <h1>Ejercicio 14 La Matrix...digo, Matriz</h1>
    <h2 class="center">Ingrese la dimensión de la matriz cuadrada:</h2>
    <form class="form-ejercicio" action="ejercicio14_matriz.php" method="post">
        <label for="dimension">Dimensión:</label>
        <input type="number" id="dimension" name="dimension" required>
        <input type="submit" value="Crear Matriz">
    </form>
</body>
<?php include('footer.php'); ?>

</html>