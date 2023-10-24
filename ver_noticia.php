<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
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
            <div class="col-6 ">
                <img src="./images/piedra.png" class="rounded-circle mt-3" alt="Logo" width="100" height="100">
            </div>
            <div class="col-6"><br>
                <h1 class="display-4 ">Mi diario</h1>
                <p>Picando noticias</p>
            </div>

        </div>
    </header><br>
    <div class="container-fluid">




        <div class="row">
            <?php
            extract($_REQUEST);
            require("admin/conexion.php");
            $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
                or die("No se puede conectar con el servidor");
            mysqli_select_db($conexion, $base_db)
                or die("No se puede seleccionar la base de datos");
            $instruccion = "select * from noticias  where id_noticia=" . $id_noticia;

            $consulta = mysqli_query($conexion, $instruccion) or die("no puedo consultar");

            $nfilas = mysqli_num_rows($consulta);
            for ($i = 0; $i < $nfilas; $i++) {
                $resultado = mysqli_fetch_array($consulta);
                print('
            <div class="col-12">
                <h1 class="card-title">' . $resultado['titulo'] . '</h1><br>
                <h4 class="card-text">' . $resultado['copete'] . '</h4><br>
                <div class="row">
                    <div class=" col-4">
                    <img src="imagenes_subidas/' . $resultado['imagen'] . '" class="card-img-top border border-dark-subtle border-radius mt-3" alt="' . $resultado['titulo'] . '" " >
                    <p class="card-text">Autor: ' . $resultado['autor'] . '</p>
                    <p class="card-text">Fecha: ' . $resultado['fecha'] . '</p>
                    </div>    
                    <div class="card-body col-8">
                        <p class="card-text ">' . $resultado['cuerpo'] . '</p>
                    </div>
                        
                    
                    <a href="javascript:history.back()" class="btn btn-primary">Volver a Noticias</a>
                </div>
            </div>





           
            
            ');
            }
            mysqli_close($conexion);
            ?>
        </div>

</body>

</html>