<?php include('header.php'); ?>
<!DOCTYPE html>
<body>
    <h1>Ejercicio 9 Insta-gramo</h1>

    <!-- Mostrar imágenes existentes -->
    <h2>Imágenes existentes</h2>
    <div class="image-container">
        <?php
        $dir = "images/";
$files = scandir($dir);
foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        echo '<a href="ejercicio10_viewimage.php?image=' . urlencode($file) . '">';
        echo '<div class="card">';
        echo '<img src="' . $dir . $file . '" alt="' . $file . '">';
        echo '<p>' . $file . '</p>';
        echo '</div>';
        echo '</a>';
    }
}
?>
    </div>

    <h2>Subir nueva imagen</h2>
    <div class="form-ejercicio">
        <form action="ejercicio9.php" method="post" enctype="multipart/form-data">
            <label for="image">Selecciona una imagen:</label>
            <input type="file" name="image" id="image" accept="image/*" required><br><br>
            <label for="new_name">Nuevo nombre de la imagen:</label>
            <input type="text" name="new_name" id="new_name" required><br><br>
            <input type="submit" name="submit" value="Subir imagen">
        </form>
    </div>

<?php
    // Procesamiento del formulario de carga de imágenes
    if (isset($_POST['submit'])) {
        $new_name = $_POST['new_name']; // Obtener el nuevo nombre de la imagen
        $image = $_FILES['image'];

        // Verificar si se cargó una imagen
        if ($image['error'] === 0) {
            $image_name = $image['name'];
            $temp_name = $image['tmp_name'];
            $target_path = "images/" . $new_name; // Usar el nuevo nombre para guardar la imagen

            // Mover la imagen a la carpeta "imagenes" con el nombre especificado
            move_uploaded_file($temp_name, $target_path);
            echo "<p>Imagen subida con éxito.</p>";
            header("location:ejercicio9.php");
        } else {
            echo "<p>Error al subir la imagen.</p>";
        }
    }
?>

</body>
</html>


<?php include('footer.php'); ?>
