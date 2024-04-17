<?php include('header.php'); ?>

<!DOCTYPE html>

<body>

    <h1>Ejercicio 10: Insta-reciclado</h1>
    <h2>Imágenes disponibles:</h2>
    <ul class="ej10_ul">
        <?php
        $dir = "imagenes/";
$files = scandir($dir);
foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        echo '<li class="ej10_li"><a href="ejercicio10_viewimage.php?image=' . urlencode($file) . '">' . $file . '</a></li>';
    }
}
?>
    </ul>
    <?php include('footer.php'); ?>