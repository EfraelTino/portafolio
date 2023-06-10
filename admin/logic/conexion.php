<?php
$host="localhost";
$user="root";
$pass="";
$db="portafolio";
$dblink= mysqli_connect($host,$user, $pass,$db);
if($dblink){
    // echo "conect";
}else{
    echo "eror";
}
?>