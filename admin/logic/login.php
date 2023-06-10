<?php
include "conexion.php";
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = mysqli_query($dblink,  "SELECT * FROM users WHERE user = '$user'") or die(mysqli_error($dblink));

$row = mysqli_num_rows($sql);
if($row>0){
    $array =mysqli_fetch_array($sql);
    $usdb= $array['user'];
    $passdb=$array['pass'];
    header('Location: ../home?user='.$usdb. "&pass=".$passdb);
}else{
    echo "usuarios no existen";
}


?>