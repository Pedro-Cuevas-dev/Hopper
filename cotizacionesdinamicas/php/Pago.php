<?php 
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
            <link rel="stylesheet" type="text/css" href="../css/perfil-style.css">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <div class="derecha">
                <h2>Registro de usuario</h2>
            </div>

        </body>

</html>

