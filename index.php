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
    <header class="container-fluid bg-danger bg-gradient text-white p-3 text-center shadow">
        <div class="row">
            <div class="col-xs-10 col-sm-8 col-md-6 col-lg-2 col-xl-2">
                <img src="./images/logo.png" class="rounded-circle mt-3" alt="Logo" width="100" height="100">
            </div>
            <div class="col-xs-10 col-sm-8 col-md-6 col-lg-8 col-xl-8"><br>
                <h1 class="display-1">Noticias</h1>
                <p>Argentina se entera</p>
            </div>
            <div class="mt-3 col-xs-10 col-sm-8 col-md-6 col-lg-2 col-xl-2">
                    <!-- Clima -->
                    <a target="_blank" href="https://hotelmix.es/weather/mendoza-18288"><img src="https://w.bookcdn.com/weather/picture/1_18288_1_4_137AE9_200_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=67185&domid=582&anc_id=4421"  alt="booked.net"/></a>
                    <!-- weather widget end -->
                    <?php
                    print(date("j F  Y "))
                    ?>
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
                <div class="card shadow" style="height:600px">
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

        <footer class="col-xs-12 col-sm-12 col-md-12 text-center"  >
            
            
        

        
            <div class="row bg-danger">
    
                
                
                    <div class="col col-xs-4 col-sm-4 col-md-4 my-3">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" fill="currentColor" class="bi bi-github  " viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                        <a class="iconFooter" href="https://github.com/PabloLehmann"> Github</a>
                            
                    
                    </div>
                    <div class="col col-xs-4 col-sm-4 col-md-4 my-3">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin " viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                        <a class="iconFooter" href="https://linkedin.com/in/pablo-enrique-lehmann"> Linkedin</a>
                        
                    </div>    
                    <div class="col col-xs-4 col-sm-4 col-md-4 my-3">
    
                        <img src="./images/iconoFigma.png" style="width: 20px; ;height: 20px;"  alt="">
                        <a class="iconFooter" href="https://figma.com/proto/pgsIxnIerLTLl7N4yurpto/Portfolio?node-id=1-2&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=20%3A25">Figma</a>
                    </div>
    
                
                
                                
            </div> 
                            
        </footer>
</body>

</html>