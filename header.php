<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mariano Vargas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1 class="titulo">Mariano Vargas</h1>
    <nav>
        <ul>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') {
                echo 'class="active"';
            } ?> href="index.php">Inicio</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio1.php') {
                echo 'class="active"';
            } ?> href="ejercicio1.php">Ejercicio 1</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio2.php') {
                echo 'class="active"';
            } ?> href="ejercicio2.php">Ejercicio 2</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio3.php') {
                echo 'class="active"';
            } ?> href="ejercicio3.php">Ejercicio 3</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio4.php') {
                echo 'class="active"';
            } ?> href="ejercicio4.php">Ejercicio 4</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio5.php') {
                echo 'class="active"';
            } ?> href="ejercicio5.php">Ejercicio 5</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio6.php') {
                echo 'class="active"';
            } ?> href="ejercicio6.php">Ejercicio 6</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio9.php') {
                echo 'class="active"';
            } ?> href="ejercicio9.php">Ejercicio 9</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio10.php') {
                echo 'class="active"';
            } ?> href="ejercicio10.php">Ejercicio 10</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio11.php') {
                echo 'class="active"';
            } ?> href="ejercicio11.php">Ejercicio 11</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio12.php') {
                echo 'class="active"';
            } ?> href="ejercicio12.php">Ejercicio 12</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio13.php') {
                echo 'class="active"';
            } ?> href="ejercicio13.php">Ejercicio 13</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio14.php') {
                echo 'class="active"';
            } ?> href="ejercicio14.php">Ejercicio 14</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'ejercicio15.php') {
                echo 'class="active"';
            } ?> href="ejercicio15.php">Ejercicio 15</a></li>
        </ul>
    </nav>