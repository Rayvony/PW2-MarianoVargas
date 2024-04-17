<!DOCTYPE html>
<?php include('header.php'); ?>

<body>
    <h1>Selecciona tu menú:</h1>
    <form class="form-ejercicio" action="ejercicio13_menu.php" method="post">
        <label><input type="checkbox" name="steps[]" value="entrada"> Entrada</label><br>
        <label><input type="checkbox" name="steps[]" value="plato_principal"> Plato Principal</label><br>
        <label><input type="checkbox" name="steps[]" value="guarnicion"> Guarnición</label><br>
        <label><input type="checkbox" name="steps[]" value="postre"> Postre</label><br>
        <input type="submit" value="Enviar">
    </form>
</body>

<?php include('footer.php'); ?>

</html>