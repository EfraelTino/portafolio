<?php
require_once "./admin/logic/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Portafolio - Efrael</title>

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



<body>


    <!-- HEADER -->


    <div class="container">
        <div class="principal-container ">
            <div class="sombra">
                <?php include('page-master/header.php') ?>
                <div class="cl-normal datos ">
                    <div class="personal-dato">
                        <div>
                            <div class="tit-header title-dato">desarrollador web</div>
                            <div class="nombres">
                                <img src="images/logo_efrael.svg" alt="">
                            </div>
                            <div class="container-documentos">
                                <a href="files/Efrael_villanueva_cv.pdf" download="files/Efrael_villanueva_cv.pdf"> <span class="icon-download"></span> Descargar CV </a>
                                <a href="https://api.whatsapp.com/send?phone=51915068001&text=Hola%21%20Efrael%20e%20realizador%20la%20compra%20de%20tu%20trabajo%20me%20gustar%C3%ADa%20contactarte"> WhatsApp <span class="icon-whatsapp"></span> </a>
                            </div>
                            <div class="icons-lista">
                                <a href="https://github.com/EfraelTino"> <span class="icon-github"></span> </a>
                                <a href="https://www.linkedin.com/in/efrael-villanueva-131469227/"> <span class="icon-linkedin"></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="lo-resto">
                        <div class="derecha pasion">

                            <h1>Pasión por el <br> <span class="sh1">desarrollo web</span>
                            </h1>
                            <h2>Hola, mi nombre es <span class="sh2">efrael, </span> soy profesional técnico en <span class="sh2">computación e informática,</span>y <span class="sh2"> desarrollador web</span> con conocimientos en <span class="sh2"> Php, JavaScript, React, MySql, Sql Sever, Sass, Bootstrap, Git. </span> Me gusta el<span class="sh2"> trabajo en equipo </span> colaborando y aportando con los conocimientos que cuento para un <span class="sh2">trabajo eficiente.</span></h2>

                            <a href="#proyectos" class="icon-chevrons-down ic-fldw"></a>
                        </div>
                        <div class="derecha proyectos" id="proyectos">

                            <h1>Mis <br> proyectos
                            </h1>
                            <div class="container-portada">
                                <?php
                                $sql = "SELECT * FROM proyectos";
                                $row = $dblink->query($sql);
                                while ($result = $row->fetch_assoc()) {
                                ?>
                                    <div class="portada">
                                        <div class="sombra-portada">
                                            <div class="la-sombra-portada">
                                                <div class="titulo-portada"><?php echo $result['nombre'] ?></div>
                                                <div class="texto-datos"> <a href="https://<?php echo $result['demo'] ?>">
                                                        <span class="icon-globe"></span>
                                                        Demo</a> | <a href="https://<?php echo $result['demo'] ?>">
                                                        <span class="icon-github"></span>
                                                        Git hub</a></div>
                                            </div>
                                        </div>
                                        <img src="images/<?php echo $result['imagen'] ?>" class="img-int">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="derecha estudios">

                            <h1> <strong>Tecnologías</strong> y <strong>habilidades</strong> </span>
                            </h1>
                            <div class="container-lista-tecnologias">
                                <?php
                                $sql = "SELECT * FROM tecnologias";
                                $row = $dblink->query($sql);
                                while ($result = $row->fetch_assoc()) {
                                ?>
                                    <div class="container-img">
                                        <img src="images/icons/<?php echo $result['imagen'] ?>" alt="nombre">
                                        <p class="nombre-tecnologia "><?php echo $result['nombre']; ?></p>
                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                        <div class="derecha crecer-container">

                            <h1>
                                Hagamos <strong style="text-decoration: underline;">crecer</strong> tu negocio
                            </h1>
                            <p>Ofresco mis servicios como freelance en: </p>
                            <?php
                            $sql = "SELECT * FROM crecer";
                            $row = $dblink->query($sql);
                            while ($result = $row->fetch_assoc()) {
                            ?>
                                <div class="lista-servicios">
                                    <div class="servicios-l">
                                        <div class="servicios-img">
                                            <img src="images/<?php echo $result['imagen'] ?>" alt="descripcion">
                                        </div>
                                        <div class="servicios-detalles">
                                            <div>
                                                <div class="servicios-titulo"><?php echo $result['nombre'] ?></div>
                                                <div class="servicios-text"><?php echo $result['descripcion'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="container-propuesta">
                            <div class="lista-barras">
                                <?php
                                for ($i = 1; $i <= 13; $i++) {

                                ?>
                                    <div class="barra<?php echo $i; ?>"></div>
                                <?php } ?>
                            </div>

                            <div class="titulo-propuesta">
                                Apasionado por la tecnología con la capacidad de adptarse a las últimas tecnologías, manteniendo siempre buenas practicas de programación
                            </div>
                        </div>



                        <div class="derecha estudios-container">

                            <h1>
                                ¿Dónde <strong style="text-decoration: underline;">estudié</strong> ?
                            </h1>
                            <?php
                            $sql = "SELECT *FROM estudios";
                            $row = $dblink->query($sql);
                            while ($result = $row->fetch_assoc()) {
                            ?>
                                <div class="lista-estudios">
                                    <div class="estudios">
                                        <div class="estudios-img">
                                            <img src="images/<?php echo $result['imagen']; ?>" alt="descripcion">
                                        </div>
                                        <div class="estudios-detalles">
                                            <div class="servicios-titulo"> <?php echo $result['nombre']; ?> </div>
                                            <div class="servicios-text"> <?php echo $result['grado']; ?> </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="derecha experiencia-container">

                            <h1>
                                Mi experiencia <strong>laboral</strong>
                            </h1>
                            <p style="text-align: left; padding-top: 0; margin-top: 0;"> Mi experiencia laboral en este trayecto como desarrollador web</p>
                            <?php
                            $sql = "SELECT * FROM experiencia";
                            $row = $dblink->query($sql);
                            while ($result = $row->fetch_assoc()) {
                            ?>
                                <div class="lista-exp">
                                    <div class="estudios">
                                        <div class="estudios-img exp">
                                            <img src="images/<?php echo $result['imagen']; ?>" alt="descripcion">
                                            <div class="lugar"><?php echo $result['nombre']; ?></div>
                                        </div>
                                        <div class="estudios-detalles">
                                            <div class="servicios-titulo"> <?php echo $result['cargo']; ?> </div>
                                            <div class="servicios-text"><?php echo $result['fecha']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="derecha recuerda">
                            <div class="nombres"><img src="images/logo_efrael.svg" alt=""></div>
                            <h1>
                                Recuerda que, si lo <strong>crees</strong> lo <strong>creas</strong>
                            </h1>
                        </div>
                    </div>
                    <!-- FOOTER -->

                </div>
                <?php include('page-master/footer.php') ?>
            </div>
        </div>
    </div>
    <div class="background">
        <div class="sombra"></div>
    </div>






    <!-- JS -->
    <?php include('page-master/js.php') ?>
    <script>
        document.querySelector('.datos').classList.add('show');
        document.querySelector('.lo-resto').classList.add('show');
    </script>
</body>
</head>

</html>