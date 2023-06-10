<?php
include "../logic/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia</title>
    <link rel="stylesheet" href="../icomoon/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div style="display: flex; justify-content: space-around;"><a href="../home" style="display: flex; justify-content: center; align-items: center; background-color: black; border: 2px solid black; color: white; font-size:20px; padding:10px 5px; text-decoration: none;"><span class="icon-chevrons-left" style="color: white;">Atrás</span></a>
        <button style="display: flex; justify-content: center; align-items: center; background-color: black; border: 2px solid black; color: white; font-size:20px; padding:10px 5px; text-decoration: none;" onclick="agregarProyecto()" data-toggle="modal" type="button">Nuevo <span class="icon-plus-square" style="color: white;"></span></button>
    </div>
    <div style="display: flex; justify-content: center;">
        <table>
            <thead>
                <tr>
                    <th>Nª</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Cargo</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM experiencia";
                $row = $dblink->query($sql);
                $pos = 0;
                if ($row->num_rows > 0) {
                    while ($result =  $row->fetch_assoc()) {
                        $pos++;

                ?>
                        <tr>
                            <td><?php echo $pos ?></td>
                            <td><?php echo $result['nombre'] ?></td>
                            <td><?php echo $result['imagen'] ?></td>
                            <td><?php echo $result['cargo'] ?></td>
                            <td><?php echo $result['fecha'] ?></td>
                            <td> <a style="text-decoration:none; font-size:20px; color:black; margin:10px;"> <span class="icon-edit-3"></span> </a> <a style="text-decoration:none; font-size:20px; color:black; margin:10px;"> <span class="icon-trash-2"></span> </a> </td>
                        </tr>
                    <?php }
                } else { ?>
                    <td colspan="5">Lo sentimos no se han encontrado registros</td>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
    <div class="modalproyecto" id="modalproyecto">
        <div class="proyectos-add-container">
            <form action="../logic/experiencie" method="post"  enctype="multipart/form-data" autocomplete="off">
                <div>
                    <label for="">Nombre de la empresa</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="">Imagen del lugar</label>
                    <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg+xml" required>
                </div>
                <div>
                    <label for="">Cargo que se dio</label>
                    <input type="text" name="cargo" id="name">
                </div>
                <div>
                    <label for="">Fecha</label>
                    <input type="text" name="fecha" id="name">
                </div>
                <div>
                    <input type="submit" value="Guardar">
                </div>
                
            </form>
            <button onclick="agregarProyecto()">Canelar</button>
        </div>
    </div>
</body>
<script>
    var modalproyecto = document.getElementById("modalproyecto");
    var isOpen = false;

    function agregarProyecto() {
        if (isOpen) {
            modalproyecto.style.display = "none";
            modalproyecto.style.pointerEvents = "none";
        } else {
            modalproyecto.style.display = "flex";
            modalproyecto.style.pointerEvents = "auto";
        }
        isOpen = !isOpen;
    }
    // function cerarModal(){
    //     modalproyecto.style.display="none";
    // }
</script>

</html>