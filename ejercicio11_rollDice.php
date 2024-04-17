<?php include('header.php');?>

<!DOCTYPE html>
<html lang="es">

<body>
    <h1>Ejercicio 11: Lanzar dados</h1>

    <?php
    // Recibir la cantidad de dados desde el formulario
    if (isset($_POST['quantity'])) {
        $quantity = intval($_POST['quantity']);
        $total_score = 0; // Inicializar el puntaje total
        echo '<h2>Dados lanzados:</h2>';
        echo '<div class="dice-container">';
        // Lanzar cada dado y mostrar su imagen
        for ($i = 0; $i < $quantity; $i++) {
            $random_value = rand(1, 6); // Generar un valor aleatorio entre 1 y 6
            $total_score += $random_value; // Sumar el valor al puntaje total
            echo '<img class="dice-image" src="dice/die-' . $random_value . '.png" alt="Dado ' . $random_value . '">';
        }
        echo '</div>';
        echo '<h2>Puntaje obtenido:</h2>';
        echo '<p>' . $total_score . '</p>'; // Mostrar el puntaje total
    } else {
        echo '<p>No se ha especificado la cantidad de dados.</p>';
    }
?>

</body>
<?php include('footer.php');?>

</html>