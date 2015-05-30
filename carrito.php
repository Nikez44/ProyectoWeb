<?php session_start();

include 'daos/global.php';
include 'daos/show_all_carrito.php';

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Carrito</title>

    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/catalogo.css"/>

</head>
<body>

    <?php include '_header.php' ?>

    <div id="content">
        <div class="wrap-title">
            <h2 class="title">Mi Carrito</h2>
            <div class="clear"></div>
        </div>

    <div class="carrito">
        <ul class="carrito-list" id="triple">
            <?php foreach($mis_juegos as $mi_juego):?>
                <li>
                    <div class="Carrito-Item">
                        <div class="Game-Image"><img src=" <?php echo $mi_juego['imagen'] ?> "></div>
                        <div class="Carrito-Title"><h1><?php echo $mi_juego['nombre'] ?></h1></div>
                        <div class="Carrito-Console"><h3>Consola: <?php echo $mi_juego['nombre_consola'] ?></h3></div>
                        <div class="Carrito-Cantidad"><h3>Cantidad: <?php echo $mi_juego['cantidad_carr'] ?></h3></div>
                        <div class="Carrito-Price"><h3>Precio Total: <?php echo ($mi_juego['precio']*$mi_juego['cantidad_carr']) ?></h3></div>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

        <a class="button" href="daos/comprar.php">Comprar</a>

    </div>

    <?php include '_footer.php' ?>

</body>
</html>