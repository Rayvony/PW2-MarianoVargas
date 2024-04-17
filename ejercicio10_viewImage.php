<?php include('header.php'); ?>
<!DOCTYPE html>

<body>
    <h1>Ejercicio 10 Insta-reciclado</h1>

    <?php
        if (isset($_GET['image'])) {
            $image_name = $_GET['image'];
            $image_path = "assets/images/" . $image_name;
            if (file_exists($image_path)) {
                echo '<div class="container_instaimg">';
                echo '<p class="image_name">' . $image_name . '</p>';
                echo '<img class="instaimg" src="' . $image_path . '" alt="' . $image_name . '">';
                echo '</div>';
            } else {
                echo '<p>La imagen no existe.</p>';
            }
        } else {
            echo '<p>No se ha especificado ninguna imagen.</p>';
        }
?>
</body>

</html>
<?php include('footer.php'); ?>