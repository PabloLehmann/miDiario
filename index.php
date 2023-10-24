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
            <div class="">

                <?php
                print(date("F j, Y, "))
                    ?>

            </div>
        </div>

    </header><br>

    <div class="container-fluid">


        <div class="row">
            <?php
            require("admin/conexion.php");
            $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
                or die("No se puede conectar con el servidor");
            mysqli_select_db($conexion, $base_db)
                or die("No se puede seleccionar la base de datos");
            $instruccion = "select * from noticias  order by fecha desc";

            $consulta = mysqli_query($conexion, $instruccion) or die("no puedo consultar");

            $nfilas = mysqli_num_rows($consulta);
            for ($i = 0; $i < $nfilas; $i++) {
                $resultado = mysqli_fetch_array($consulta);
                print('
            <div class=" p-3 col-xs-10 col-sm-8 col-md-6 col-lg-4 col-xl-3" >
                <div class="card" style="height:600px">
                <img src="imagenes_subidas/' . $resultado['imagen'] . '" class="card-img-top img-fluid" style="height:300px" alt="' . $resultado['titulo'] . '">
                    <div class="card-body">
                            <h5 class="card-title">' . $resultado['titulo'] . '</h5>
                        <p class="card-text">' . substr($resultado['copete'], 0, 30) . '</p>
                        <p class="card-text">Autor: ' . $resultado['autor'] . '</p>
                        <p class="">Fecha: ' . $resultado['fecha'] . '</p>
                        <a href="ver_noticia.php?id_noticia=' . $resultado['id_noticia'] . '" class="btn btn-primary">Ver noticia</a>
                    </div>
                 </div>
            </div>





           
            
            ');
            }
            mysqli_close($conexion);
            ?>
        </div>

</body>

</html>