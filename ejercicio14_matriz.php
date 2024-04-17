<!DOCTYPE html>
<?php include('header.php'); ?>

<body>
    <h1>Matriz y Acciones:</h1>
    <div class="matriz-container">
        <?php
        $dimension = $_POST['dimension'] ?? 0;

$matriz = [];
for ($i = 0; $i < $dimension; $i++) {
    for ($j = 0; $j < $dimension; $j++) {
        $matriz[$i][$j] = $i * $dimension + $j + 1;
    }
}

echo '<table class="matriz">';
for ($i = 0; $i < $dimension; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $dimension; $j++) {
        $is_diagonal_principal = $i == $j;
        $is_diagonal_secundaria = $j == $dimension - $i - 1;

        $class_name = '';
        if ($is_diagonal_principal || $is_diagonal_secundaria) {
            $class_name = 'diagonal-cell';
        }

        echo "<td class='$class_name'>" . $matriz[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
    </div>

    <?php
    $suma = 0;
for ($i = 0; $i < $dimension; $i++) {
    for ($j = 0; $j < $dimension; $j++) {
        $suma += $matriz[$i][$j];
    }
}
echo "<h2>Suma de todos los valores de la matriz:</h2>";
echo '<p class="center">' . $suma . "</p>";
?>
</body>
<?php include('footer.php'); ?>

</html>