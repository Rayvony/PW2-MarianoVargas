<?php

if (isset($_POST['name'], $_POST['planet'])) {
    $name = $_POST['name'];
    $planet = $_POST['planet'];

    $data = json_encode(array('name' => $name, 'planet' => $planet)) . PHP_EOL;
    file_put_contents('ejercicio12_visitors.txt', $data, FILE_APPEND | LOCK_EX);

    header('Location: ejercicio12_visitors.php');
    exit();
} else {
    echo "Error: Datos incompletos.";
}
