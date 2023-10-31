<?php 

session_start();
include '../vistas/navbar.php';
include 'guardian.php';
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
                <h1>Tu Perfil</h1>
                <hr>
                <h2>Datos Personales</h2>
                <h3>Nombre:</h3>
                <p class="highlight">[Relleno] [Relleno] [Relleno]</p>
                <br>
                <button href="#" class="h-btn">Editar</button>

                <h3>Correo:</h3>
                <p class="highlight">[Relleno] [Relleno] [Relleno]</p>
                <br>
                <button href="#" class="h-btn">Editar</button>
                
                <h3>Telefono</h3>
                <p class="highlight">618-555-5523</p>
                <br>
                <button href="#" class="h-btn">Editar</button>
                
            </div>

        </body>

</html>
