<?php 
include "logic/conexion.php";
if(isset($_GET['user'])){
    $user= $_GET['user'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Home- Efrael</title>

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://dominio.com/">
    <meta property="og:site_name" content="https://dominio.com/">
    <meta property="og:title" content="Benji Pet Shop - Tienda de animaless">
    <meta property="og:description" content="Description">
    <meta property="og:image" content="https://dominio.com/images/og.png">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="400">

    <!-- HEAD -->
    <?php include('page-master/head.php') ?>


</head>
<body >
    <h1><?php echo $user; ?></h1>
    <div>
        <?php include "page-master/menu.php" ?>
    </div>
<body>
</html>