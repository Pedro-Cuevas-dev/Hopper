<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrito_cop.css">
    <link rel="stylesheet" type="text/css" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/footer.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=MuseoModerno:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Estilos de Font Awesome, carrito de compras -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <!--  Estilos de Font Awesome, icono usuario  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <title>Carrito de Compras</title>
</head>
<body>
     <!--Header-->

      <!--Header-->

        <header>
            <a href="index.php" class="logo"><i class='bx bxs-diamond'></i> Hopper</a>

            <ul class="navlist">
                <!-- <li><a href="index.html" class="active">Inicio</a></li> -->
                <li><a href="acercade.php">Acerca de nosotros</a></li>
                <li><a href="pantalla_cop.php">Tienda</a></li>
                <!-- <li><a href="regist.html">Registrate</a></li> -->
                <!-- <li><a href="Log.html">Iniciar Sesión</a></li> -->
                <!-- Iconos del navbar -->
                <li><a href="carrito_cop.php"><i class="fas fa-shopping-cart"></i></a></li>  
                <li><a href="Login.php"><i class="fas fa-user"></i> </a></li>
            </ul>

            <div class="h-main">
                <a href="producto_cop.php" class="h-btn">Cotizar</a>
                <div class="bx bx-menu" id="menu-icon"></div>
                
            </div>
        </header>
        <!--header end-->
    <div class="container">
        <h1>Tu carrito</h1><br>

        <div class="cart" id="cart-container">
            <!-- Lista de productos en el carrito -->
            <!-- Los elementos se agregarán dinámicamente aquí -->
        </div>

        <!-- Resumen del pedido y botón de pago -->
        <div class="order-summary">
            <h2>Resumen del Pedido</h2>
            <div class="resumen">
                <ul id="resumen-list"></ul>
            </div>
            
            <p id="subtotal">Subtotal: $0.00</p>
            <p id="envio">Envío: $5.00</p>
            <p id="total">Total: $5.00</p>
            <a href="form_pago.php" class="checkout-button-link">
                <button class="checkout-button-approved">Realizar Pago</button>
            </a>
        </div>
    </div>

    <footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <p>&copy Hopper team | Todos los derechos reservados</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="JS/carrito_cop.js"></script>
    <script src="JS/modal_cop.js"></script>
    
</body>
</html>
