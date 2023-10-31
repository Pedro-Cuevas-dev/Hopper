<?php include 'vistas/welcome.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form_pago.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="js/form_pago.js"></script>
    <style>
        /* Aquí puedes agregar estilos adicionales si es necesario */
    </style>
</head>
<header>
    <?php include 'vistas/navbar.php'?>
</header>
<body>
    <main><br><br><br>
        <section class="contact">
            <div class="contact-form-container">
                <div class="contact-form-box">
                    <h3>Formulario de Pago</h3>
                    <form action="#" method="post" class="contact-form">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" required>
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" required>
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" required>
                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" required>
                        <label for="metodo-pago">Método de Pago:</label>
                        <select id="metodo-pago" name="metodo-pago" required>
                            <option value="none" selected disabled hidden>Seleccione un método de pago</option>
                            <option value="tarjeta">Tarjeta de Crédito</option>
                            <option value="paypal">PayPal</option>
                        </select>
                        <div id="tarjeta-fields" style="display: none;">
                            <label for="nombre-tarjeta">Nombre:</label>
                            <input type="text" id="nombre-tarjeta" name="nombre-tarjeta">
                            <label for="numero-tarjeta">Número de Tarjeta:</label>
                            <input type="text" id="numero-tarjeta" name="numero-tarjeta">
                            <label for="fecha-vencimiento">Fecha de Vencimiento:</label>
                            <input type="text" id="fecha-vencimiento" name="fecha-vencimiento">
                            <label for="atras-tarjeta">Número de Atrás de la Tarjeta:</label>
                            <input type="text" id="atras-tarjeta" name="atras-tarjeta">
                        </div>
                        <div id="paypal-fields" style="display: none;">
                            <label for="paypal-correo">Correo Electrónico de PayPal:</label>
                            <input type="email" id="paypal-correo" name="paypal-correo">
                        </div>
                        <button type="submit" class="submit-button">Realizar Pago</button>
                    </form><br><br><br><br>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>© Hopper. Todos los derechos reservados.</p>
    </footer>
</body>

</html>

