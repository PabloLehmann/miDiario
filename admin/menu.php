<!-- <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="noticias.php">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="usuarios.php">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" >Salir</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" >

                    <?php
                    // print($_SESSION["nombre"]." ".$_SESSION["apellido"])
                    ?>
                    </a>
                </li>
            </ul> -->

<div class="text-center fixed-top bg-danger">
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Mi diario</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="">Panel de control </a>
                    </li>

                </ul>

                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
                    <li class="nav-item ms-3">
                        <a class="nav-link " aria-current="page" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link " href="noticias.php">Noticias</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link " href="usuarios.php">Usuarios</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link " href="logout.php">Salir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled ">

                            <?php
                            print($_SESSION["nombre"] . " " . $_SESSION["apellido"])
                                ?>
                        </a>
                    </li>
                </ul>



            </div>
        </div>
    </nav>
</div>