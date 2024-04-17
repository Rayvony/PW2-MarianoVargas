<?php include('header.php'); ?>
<!DOCTYPE html>
<body>

<body>
<h1>Ejercicio 2 Binomio Cuadrado Perfecto</h1>
<form action="ejercicio2.php" method="GET">
    <label for="Numero1">Numero 1:</label><br>
    <input type="text"name="numero1"><br>
    <label for="Numero2">Numero 2:</label><br>
    <input type="text"name="numero2"><br><br>

    <input type="radio" name="metodo" value="1">
    <label for="metodoA">Metodo A</label><br>
    <input type="radio" name="metodo" value="2">
    <label for="metodoB">Metodo B</label><br><br>

    <input type="submit" value="Enviar">
</form>


<br><br>
</body>
</html>
<?php
error_reporting(0);
if ($_GET["metodo"] == 1) {
    _binomioCuadradoPerfecto_a();
}elseif ($_GET["metodo"] == 2){
    _binomioCuadradoPerfecto_b();
}

function _binomioCuadradoPerfecto_a(){
    echo pow(($_GET["numero1"]+$_GET["numero2"]),2);
}

function _binomioCuadradoPerfecto_b(){
    echo (pow($_GET["numero1"],2) +pow($_GET["numero1"],2) + (2*$_GET["numero1"]*$_GET["numero2"]));
}
include('footer.php');
