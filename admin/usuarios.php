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
       
    </head>

    <body>
    <header class="container-fluid bg-danger text-white p-3">
            <div class="row">
                <div class="col-12"><br><br>
                    <h1 class="display-4 text-center">Mi diario</h1>
                    <br>
                </div>
            </div>
           



            <div class="container">
            <?php require("menu.php"); ?>



            <?php
            if (isset($mensaje))
                print("<h3 >" . $mensaje . "</h3>");
            ?>

        </div>
    </header><br>

       



    <section class="d-flex justify-content-center align-items-center">
        <h3>Usuario</h3>
    </section><br>

    <section class="container"> 
        <a href="usuario_nuevo.php" class="btn btn-primary my-3">Crear nuevo usuario</a>
    

    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ususario</th>
            <th>Password</th>
            <th>Editar</th>
            <th>borrar</th>
        </tr>


        <?php
        require("conexion.php");
        $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
            or die("No se puede conectar con el servidor");
        mysqli_select_db($conexion, $base_db)
            or die("No se puede seleccionar la base de datos");
        $instruccion = "select * from usuarios";
        $consulta = mysqli_query($conexion, $instruccion)
            or die("No puedo consultar");
        $nfilas = mysqli_num_rows($consulta);
        for ($i = 0; $i < $nfilas; $i++) {

            $resultado = mysqli_fetch_array($consulta);

            print('
            <tr>
                <td>' . trim($resultado['nombre']) . '</td>
                <td>' . substr($resultado['apellido'], 0, 50) . '</td>
                <td>' . substr($resultado['usuario'], 0, 50) . '</td>
                <td>' . substr($resultado['password'], 0, 50) . '</td>
                <td> <a href="usuario_editar.php?id_usuario=' . $resultado['id_usuario'] . '" class=" btn btn-secondary">Editar</a></td>
                <td> <a href="usuario_borrar.php?id_usuario=' . $resultado['id_usuario'] .'" class=" btn btn-danger" onclick="return confirm(&quot; Desea eliminar &quot;)" >Borrar</a></td>
                
            </tr>
            
            
            
            
           ');

        }
        mysqli_close($conexion);
        ?>
    </table>

    
</section>
</body>

</html>