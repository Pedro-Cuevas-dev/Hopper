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
            <link rel="stylesheet" type="text/css" href="../css/perfil-styles.css">
            <title>Item Catalog</title>
        </head>
        <body>
            <div class="leftside">
                <div class="leftsidetop">
                <h3>Categorias</h2>
                </div>
                <br>
                <ol>Datos Personales</ol>
                <br>
                <ol>Compras Anteriores</ol>
                <br>
                <div class="leftsidebottom">
                    <h2><a href="Logout.php">Logout</a>
                </div>
            </div>
            <div class="derecha">
                <h2>Datos Personales</h2>
                <?php 
                include '../js/crud.php' 
                ?>
            </div>

</html>

