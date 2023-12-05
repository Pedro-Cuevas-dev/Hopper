<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CotiEx</title>
    <link rel="stylesheet" type="text/css" href="css/pantalla_cop.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/footer.css">

     <!--box icons link-->
     <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=MuseoModerno:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Estilos de Font Awesome, carrito de compras -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <!--  Estilos de Font Awesome, icono usuario  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
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
    <!-- <header>
        <?php include 'vistas/navbar.php'?>
    </header> -->
    <!--header end-->

    <div class="lista-productos">Lista de productos</div>
    <!--Hero section-->
    <section class="hero1">
        <div class="hero-in">
            <div class="card">
                <div class="face front">
                    <img src="img/prefab1-rem.png" alt="">
                    <h3>Turbo 1</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="html_pantalla_de_inf.php">Comprar</a>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="face front">
                    <img src="img/prefab2-rem.png" alt="">
                    <h3>Turbo 2</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    </p>
                    <div class="link">
                        <a href="html_pantalla_de_inf.php">Comprar</a>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="face front">
                    <img src="img/prefab3-rem.png" alt="">
                    <h3>Turbo 3</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="html_pantalla_de_inf.php">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face front">
                    <img src="img/prefab3-rem.png" alt="">
                    <h3>Turbo 3</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="html_pantalla_de_inf.php">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="img/prefab3-rem.png" alt="">
                    <h3>Turbo 3</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="html_pantalla_de_inf.php">Comprar</a>
                    </div>
                </div>
            </div>
    </section>
    <!-- Hero section inferior -->
    <section class="hero2">
        <div class="hero-in">
            <div class="card">
                <div class="face front">
                    <img src="img/prefab1-rem.png" alt="">
                    <h3>Turbo 1</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="carrito_cop.php">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="img/prefab3-rem.png" alt="">
                    <h3>Turbo 3</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="carrito_cop.php">Comprar</a>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="face front">
                    <img src="img/prefab2-rem.png" alt="">
                    <h3>Turbo 2</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    </p>
                    <div class="link">
                        <a href="carrito_cop.php">Comprar</a>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="face front">
                    <img src="img/prefab3-rem.png" alt="">
                    <h3>Turbo 3</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="carrito_cop.php">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="img/prefab3-rem.png" alt="">
                    <h3>Turbo 3</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="carrito_cop.php">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Hero section inferior -->
     <section class="hero3">
        <div class="hero-in">
            <div class="card">
                <div class="face front">
                    <img src="img/prefab1-rem.png" alt="">
                    <h3>Turbo 1</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="carrito_cop.php">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="img/prefab3-rem.png" alt="">
                    <h3>Turbo 3</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="carrito_cop.php">Comprar</a>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="face front">
                    <img src="img/prefab2-rem.png" alt="">
                    <h3>Turbo 2</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    </p>
                    <div class="link">
                        <a href="carrito_cop.php">Comprar</a>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="face front">
                    <img src="img/prefab3-rem.png" alt="">
                    <h3>Turbo 3</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="carrito_cop.php">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="img/prefab3-rem.png" alt="">
                    <h3>Turbo 3</h3>
                </div>
                <div class="face back">
                    <h3>Turbo 1</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <div class="link">
                        <a href="carrito_cop.php">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
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
</body>
</html>
