<?php 
include '../vistas/navbar.php';
include 'guardian.php';

$servidor = "localhost";
$usuario = "root";
$contra = "";
$basedatos = "cotizaciones";

// Crear conexion
$conn = new mysqli($servidor, $usuario, $contra, $basedatos);   

if ($conn->connect_error) {
    die("mensaje". $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

?>


<!DOCTYPE html>
<html lang="en">
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/style.css">
            <title>Item Catalog</title>
        </head>
        <body>
            <div class="leftside">
                <div class="leftsidetop">
                <h3>Categorias</h2>
                </div>
                <hr>
                <br>
                <ol><a href="Datos.php">Datos Personales</a></ol>
                <br>
                <ol><a href="Pago.php">Formas De Pago</a></ol>
                <br>
                <ol><a href="Compras.php">Compras Anteriores</a></ol>
                <br>
                
                <div class="leftsidebottom">
                    <h2><a href="Logout.php">Logout</a>
                </div>
            </div>
            <div class="rightside">
                <h1>Tu Perfil  <img src="../img/user-solid.svg" alt="User" class="icon"></h1><button href="#" class="h-btn2">Editar</button>
                <hr>
                <h2>Datos Personales</h2>
                <br>
                <h3>Nombre:</h3>
                <p class="highlight">[Relleno] [Relleno] [Relleno]</p>
                <br>
                <h3>Correo:</h3>
                <p class="highlight">[Relleno] [Relleno] [Relleno]</p>
                <br>
                <h3>Telefono</h3>
                <p class="highlight">618-555-5523</p>
                
            </div>

        </body>

</html>
