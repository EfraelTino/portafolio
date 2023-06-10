<?php
include "conexion.php";

$nameproject = $_POST['name'];
$cargo = $_POST['cargo'];
$fecha = $_POST['fecha'];

if (isset($_FILES['image'])) {
    $img_name = $_FILES['image']['name'];
    $img_type = $_FILES['image']['type'];
    $tmp_name = $_FILES['image']['tmp_name'];
    // separa el nombre del archivo con su extension
    $img_explode = explode('.', $img_name);
    $img_ext = end($img_explode);

    $extensiones = ['jpeg', 'png', 'jpg'];
    if (in_array($img_ext, $extensiones) == true || $img_ext === 'svg') {
        $types = ["image/jpeg", "image/jpg", "image/png", "image/svg+xml"];
        if (in_array($img_type, $types)) {
            $time = time();
            $new_image = $time . $img_name;
            if (move_uploaded_file($tmp_name, '../../images/' . $new_image)) {
                $ran_id = rand(time(), 1);
                $sql = mysqli_query($dblink, "INSERT INTO experiencia (nombre, imagen, cargo, fecha) VALUES ('{$nameproject}', '{$new_image}', '{$cargo}', '{$fecha}')");
                echo "success";
            } else {
                echo "error";
            }
        } else {
            echo "type error ";
        }
    }
}
