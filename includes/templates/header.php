<?php 

    if(!isset($_SESSION)) {
     session_start();
    }

    $auth = $_SESSION['login'] ?? false;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derom Real Estate</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="" alt="Logotipo de Derom Real Estate">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg">
                    <nav class="navegacion">
                    <a href="index.php">Home</a>
                        <a href="anuncios.php">Advertisements</a>
                        <a href="anuncios.php">Rent</a>
                        <a href="nosotros.php">Brokers</a>
                        <a href="blog.php">Blog</a>
                        <a href="nosotros.php">About</a>
                        <a href="contacto.php">Contact</a>

                        <?php if($auth):  ?>
                            <a href="cerrar-sesion.php">Cerrar Sesion</a>
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