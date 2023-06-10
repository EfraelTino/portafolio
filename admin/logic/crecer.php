<?php 
include "conexion.php";

$nameproject=$_POST['nameproject'];
$repositori=$_POST['desc'];

if(isset($_FILES['image'])){
    $img_name=$_FILES['image']['name'];
    $img_type=$_FILES['image']['type'];
    $tmp_name = $_FILES['image']['tmp_name'];
    // separa el nombre del archivo con su extension
    $img_explode = explode('.' ,$img_name);
    $img_ext= end($img_explode);
    
    $extensiones= ['jpeg', 'png', 'jpg'];
    if(in_array($img_ext, $extensiones) == true){
        $types = ["image/jpeg", "image/jpg", "image/png"];
        if(in_array($img_type, $types)){
            $time=time();
            $new_image=$time . $img_name;
            if(move_uploaded_file($tmp_name, '../../images/'. $new_image)){
                $ran_id=rand(time(),100000000);
                $sql = mysqli_query($dblink, "INSERT INTO crecer (nombre, imagen, descripcion) VALUES ('{$nameproject}', '{$new_image}', '{$repositori}')");
                echo "success";
            }else{
                echo "error";
            }
        }else{
            echo "type error ";
        }
    }
}