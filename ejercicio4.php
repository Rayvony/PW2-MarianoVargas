<?php include('header.php'); ?>
<!DOCTYPE html>
    <body>
    <h1>Ejercicio 4 Incrementar</h1>
        <div class="form-ejercicio">
        <form action="ejercicio4.php" method="GET">
            <label for="numero">Numero:</label><br>
            <input type="text"name="numero"><br><br>
            
            <input type="submit" value="Enviar">
        </form>
        </div>
    </body>
</html>
<?php
error_reporting(0);

if(isset($_GET["numero"])) {
    _incrementar();
}

function _incrementar()
{
    $resultado = $_GET["numero"] + 1;
    echo $resultado;
}

include('footer.php');
