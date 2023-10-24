<?php
session_start();
extract($_REQUEST);
if (!isset($_SESSION['usuario_logueado']))
    header("location:index.php")
        ?>


    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    </head>

    <body>
        <div class="container">
        <?php require("menu.php"); ?>



        <h1>Usuario editar</h1>

        <?php
        require("conexion.php");
        $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
            or die("No se puede conectar con el servidor");
        mysqli_select_db($conexion, $base_db)
            or die("No se puede seleccionar la base de datos");
        $instruccion = 'select * from usuarios where id_usuario=' . $id_usuario . '';
        $consulta = mysqli_query($conexion, $instruccion) or die("No pudo consultar");
        $resultado = mysqli_fetch_array($consulta);
        // print_r($resultado);
        
        if (isset($mensaje))
            print("<h3 style='color:#cc00ff'>" . $mensaje . "</h3>");

        ?>

        <form action="usuario_editar_guardar.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese un nombre"
                    required value="<?php print($resultado['nombre']); ?>">

            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese un apellido"
                    required value="<?php print($resultado['apellido']); ?>">

            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese un usuario"
                    required value="<?php print($resultado['usuario']); ?>">

            </div>
            
            

            <div class="mb-3">
               
                <input type="hidden" name="id_usuario" value="<?php print($resultado['id_usuario']); ?>">
                <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
                <a href="usuarios.php" class="btn btn-info">Volver a Ususarios</a>
            </div>
        </form>
    </div>
    <!-- <div id="librerias">
        <script>
            $(document).ready(function () {
                $('#cuerpo').summernote({
                    height: 200
                });
            });
        </script>
    </div> -->
</body>

</html>