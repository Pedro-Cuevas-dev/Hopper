<?php include '../vistas/navbar.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/regist.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <main>
        <section class="contact">  
            <div class="contact-form">
                <br>
                <br>
                <h3>Formulario de registro</h3>
                <form action="registro.php" method="post">
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit" class="submit-button" name="submit">Registrarse</button>
                </form>
            </div>
        
        </section>
    </main> <br><br><br><br><br><br><br><br><br><br><br><br>

    <footer>
        <p>© 2023 Catálogo de Cotizaciones. Todos los derechos reservados.</p>
    </footer>
</body>
</html>