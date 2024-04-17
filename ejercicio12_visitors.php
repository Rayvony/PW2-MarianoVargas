<!DOCTYPE html>
<?php include('header.php'); ?>

<body>
    <h1>Lista de visitantes extraterrestres</h1>

    <h2>Visitantes:</h2>
    <ul>
        <?php
        $visitors = file('ejercicio12_visitors.txt');
$total_non_earth_visitors = 0;
foreach ($visitors as $visitor) {
    $data = json_decode($visitor, true);
    if ($data !== null && isset($data['name'], $data['planet'])) {
        echo '<li class="center">' . $data['name'] . ' - ' . $data['planet'] . '</li>';
        if ($data['planet'] !== 'Tierra') {
            $total_non_earth_visitors++;
        }
    }
}
?>
    </ul>

    <h2>Total de visitantes no terrestres:</h2>
    <p class="center"><?php echo $total_non_earth_visitors; ?></p>

</body>
<?php include('footer.php'); ?>

</html>