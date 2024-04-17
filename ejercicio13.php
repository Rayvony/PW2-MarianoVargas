<!DOCTYPE html>
<?php include('header.php'); ?>

<body>
    <h1>Ejercicio 13 ConociendINIs con el Menú no saludable</h1>
    <h2>Seleccione su menú:</h2>
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