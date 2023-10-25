<?php
session_start();
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



        <h1>Nuevo usuario</h1>
        <form action="usuario_nuevo_guardar.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre"
                    required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido"
                    required>

            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" onkeyup="comprobar_usuario(this.value)" placeholder="Ingrese su usuario"
                    required>
                    <span id="mensaje"></span>


            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña"
                    required>

            </div>
            
            

            <div class="mb-3">

                <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Crear usuario">
            </div>
        </form>
    </div>
    
    <script>
                

                function comprobar_usuario(str) {

                    if (str.length == 0) {
                        document.getElementById("mensaje").innerHTML = "";

                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {

                                if(this.responseText==1)
                                {
                                    document.getElementById("enviar").disabled = true;
                                    document.getElementById("mensaje").innerHTML = "<p style='color:red'>Usuario No Disponible</p>";
                                }
                                else
                                {
                                    document.getElementById("enviar").disabled = false;
                                document.getElementById("mensaje").innerHTML = "";
                                }
                            }
                        };



                        xmlhttp.open("GET", "ajax_comprobar_usuario.php?usuario=" + str, true);
                        xmlhttp.send();
                    }
                }
            </script>
</body>

</html>