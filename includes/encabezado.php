<?php
$pagina_actual = basename($_SERVER['PHP_SELF']);
// echo "El nombre del archivo actual es: $pagina_actual";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/contenido.css">
    <script src="scripts/pagina-actual.js" defer></script>

</head>

<body>
    <!-- Navegación del la página -->
    <div class="nav-contenedor">
        <nav>
            <div class="logo">
                <img src="img/logo.png" alt="">
                <h2><a href="index.php">ALDAJASSOFL</a></h2>
            </div>
            <ul id="menu">
                <?php
                if ($pagina_actual === "index.php")
                    echo '';
                else {
                    //abre else
                    ?>
                    <li class="info"><a href="#portada">Portada</a></li>
                    <li class="info"><a href="#intro">Introducción</a></li>
                    <li class="info"><a href="#actividad">Actividad</a></li>
                    <?php
                }
                //Cierre de else
                ?>
                <li>
                    <div class="actividades">
                        <span class="actividades-toggle">Actividades</span>
                        <div class="actividades-contenido">
                            <!-- links a las actividades -->
                            <a href="sintesis.php">Síntesis</a>
                            <a href="cuadro-comparativo.php">Cuadro comparativo</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Fin navegación -->


    <main>