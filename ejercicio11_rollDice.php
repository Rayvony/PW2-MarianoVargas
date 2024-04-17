<?php include('header.php');?>

<!DOCTYPE html>
<html lang="es">

<body>
    <h1>Ejercicio 11 Lanzar dados</h1>

    <?php
    if (isset($_POST['quantity'])) {
        $quantity = intval($_POST['quantity']);
        $total_score = 0;
        echo '<h2>Dados lanzados:</h2>';
        echo '<div class="ej11_dice-container">';
        for ($i = 0; $i < $quantity; $i++) {
            $random_value = rand(1, 6);
            $total_score += $random_value;
            echo '<div class="ej11_bg">';
            echo '<img class="ej11_dice-image" src="assets/dice/die-' . $random_value . '.png" alt="Dado ' . $random_value . '">';
            echo '</div>';
        }
        echo '</div>';
        echo '<h2>Puntaje obtenido:</h2>';
        echo '<p class="ej11_score">' . $total_score . '</p>'; // Mostrar el puntaje total
    } else {
        echo '<p>No se ha especificado la cantidad de dados.</p>';
    }
?>

</body>
<?php include('footer.php');?>

</html>