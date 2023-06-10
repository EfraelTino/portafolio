<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Admin- Efrael</title>

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
<body class="body-login">
    <div class="login-container">
        <div>
            <h1 style="text-align: center;">Login</h1>
            <form action="logic/login.php" method="post">
                <input type="text" name="user" placeholder="User">
                <input type="text" name="pass" placeholder="Password"> 
                <button type="submit">
                <span class="icon-user"> </span>    
                Ingresar</button>
            </form>
        </div>
    </div>
<body>
</html>