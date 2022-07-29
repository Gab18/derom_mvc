<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)) {
        $inicio = false;
    } 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derom Real Estate</title>
    <link rel="stylesheet" href="../build/css/app.css">
</head>
<body>
<header class="header <?php echo $inicio ? 'inicio' : '' ?>">
    <div class="contenedor contenido-header">
        <div class="barra">
            <a href="/">
                <img src="/build/img/logo.svg" alt="Logotipo de Bienes Raices">
            </a>

            <div class="mobile-menu">
                <img src="/build/img/barras.svg" alt="icono menu responsive">
            </div>
            <div class="derecha">
                <img class="dark-mode-boton" src="/build/img/dark-mode.svg">
                <nav class="navegacion">
                    <a href="/">Home</a>
                    <a href="/propiedades">Advertisements</a>
                    <a href="/propiedades">Rent</a>
                    <a href="/nosotros">Brokers</a>
                    <a href="/blog">Blog</a>
                    <a href="/nosotros">About</a>
                    <a href="/contacto">Contact</a>
                    <?php if($auth):  ?>
                        <a href="/logout">Cerrar Sesion</a>
                    <?php endif; ?>
                </nav>
            </div>   
        </div> <!--.barra-->
        <?php 
            if($inicio){
                echo "<h1>Venta de Casas y Departamentos  Exclusivos de Lujo</h1>";
            }
        ?>
    </div>
</header>

<?php echo $contenido; ?>

<footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <nav class="navegacion">
        <a href="index.php">Home</a>
                <a href="anuncios.php">Advertisements</a>
                <a href="anuncios.php">Rent</a>
                <a href="nosotros.php">Brokers</a>
                <a href="blog.php">Blog</a>
                <a href="nosotros.php">About</a>
                <a href="contacto.php">Contact</a>
        </nav>
    </div>

    <p class="copyright"><?php echo date('Y'); ?> &copy; Derom Real Estate. All rights reserved. Website by Softarthur.com</p>    </footer>

    <script src="../build/js/bundle.min.js"></script>
</body>
</html>