<!DOCTYPE html>
<?php include('header.php'); ?>

<body>
    <h1>Ejercicio 15 Buscando una palabra en un pajar, más bien en un String</h1>

    <form class="form-ejercicio" action="ejercicio15.php" method="post">
        <label for="palabra_clave">Palabra clave:</label>
        <input type="text" name="palabra_clave" id="palabra_clave" required><br><br>

        <label for="texto">Texto:</label><br>
        <textarea name="texto" id="texto" rows="5" cols="50" required></textarea><br><br>

        <input type="submit" value="Contar ocurrencias">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palabra_clave = $_POST["palabra_clave"];
        $texto = $_POST["texto"];

        include "ejercicio15_buscar.php";


        $ocurrencias = buscar($palabra_clave, $texto);


        echo '<p class="center">La palabra clave ' . $palabra_clave . ' se encuentra ' . $ocurrencias . ' veces en el texto.</p>';


    }
?>
</body>
<?php include('footer.php'); ?>

</html>