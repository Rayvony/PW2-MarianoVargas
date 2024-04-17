<!DOCTYPE html>
<?php include('header.php'); ?>

<body>
    <h1>Menú seleccionado:</h1>
    <ul>
        <?php
        $selected_steps = $_POST['steps'] ?? [];

// Leer el archivo menu.ini
$menu = parse_ini_file('menu.ini');

foreach ($selected_steps as $step) {
    echo '<li class="center">' . ucfirst(str_replace('_', ' ', $step)) . ': ' . $menu[$step] . '</li><br>';
}
?>
    </ul>
</body>
<?php include('footer.php'); ?>