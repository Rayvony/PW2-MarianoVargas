<?php include('header.php'); ?>
<!DOCTYPE html>
<body>
    <h1>Ejercicio 6 Nombre Completo</h1>
    <div class="form-ejercicio">
        <form action="ejercicio6.php" method="GET">

            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre"><br>

            <label for="apellido">Apellido:</label><br>
            <input type="text" name="apellido"><br>

            <label for="horario">Horario:</label><br>
            <input type="text" name="horario"><br><br>

            <input type="radio" name="metodo" value="1">
            <label for="metodo">Saludo Formal</label><br>
            <input type="radio" name="metodo" value="2">
            <label for="metodo">Saludo Informal</label><br><br>

            <input type="submit" value="Enviar">

        </form>
    </div>
</body>
<?php

if (isset($_GET["nombre"]) && isset($_GET["apellido"]) && isset($_GET["horario"]) && isset($_GET["metodo"])) {
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $horario = $_GET["horario"];
    $metodo = $_GET["metodo"];

    $saludo = new Saludar($nombre, $apellido);

    if ($metodo == 1) {
        echo $saludo->saludoFormal($horario);
    } elseif ($metodo == 2) {
        echo $saludo->saludoInformal($horario);
    }
}

class Saludar
{
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario)
    {
        $saludo = $this->determinarSaludo($horario);
        return $saludo . ' ' . $this->nombre . ' ' . $this->apellido;
    }

    public function saludoInformal($horario)
    {
        $saludo = $this->determinarSaludo($horario);
        return '¡Hola ' . $this->nombre . '! Que tengas un ' . $saludo;
    }

    private function determinarSaludo($horario)
    {
        $hora = intval($horario);
        if ($hora >= 5 && $hora < 13) {
            return 'Buenos días';
        } elseif ($hora >= 13 && $hora < 21) {
            return 'Buenas tardes';
        } else {
            return 'Buenas noches';
        }
    }
}
?>
<?php include('footer.php'); ?>
</html>

