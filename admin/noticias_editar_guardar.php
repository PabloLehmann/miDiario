<?php
session_start();
extract($_REQUEST);
if (!isset($_SESSION['usuario_logueado']))
    header("location:index.php");
extract($_REQUEST);
require("conexion.php");
$conexion = mysqli_connect($server_db, $usuario_db, $password_db)
    or die("No se puede conectar con el servidor");
mysqli_select_db($conexion, $base_db)
    or die("No se puede seleccionar la base de datos");
// $fecha = date("Y,m,d");
$titulo = mysqli_real_escape_string($conexion, $titulo);
$copete = mysqli_real_escape_string($conexion, $copete);
$cuerpo = mysqli_real_escape_string($conexion, $cuerpo);
$autor = mysqli_real_escape_string($conexion, $autor);
// subir imagen
$copiarArchivo = false;
if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
    $nombreDirectorio = "../imagenes_subidas/";
    $idUnico = time();
    $nombreFichero = $idUnico . "-" . $_FILES['imagen']['name'];
    $copiarArchivo = true;
} else
    $nombreFichero = $imagencita;

if ($copiarArchivo){
    unlink($nombreDirectorio.$imagencita);
    move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreDirectorio . $nombreFichero);
}

// $id_usuario = $_SESSION["id_usuario"];
$instruccion = "update noticias set titulo='$titulo',copete='$copete',cuerpo='$cuerpo',imagen='$nombreFichero',categoria='$categoria',autor='$autor' where id_noticia='$id_noticia'";
$consulta = mysqli_query($conexion, $instruccion)
    or die("No pudo insertar");
mysqli_close($conexion);
header("location:noticias_editar.php?mensaje=guardo&id_noticia=".$id_noticia);
?>