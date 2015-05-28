<?php
/**
 * Created by PhpStorm.
 * User: Hyuchiha
 * Date: 13/05/2015
 * Time: 07:04 PM
 */

include 'daos/show_all_juegos.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/catalogo.css"/>
</head>
<body>

    <?php include '_header.php' ?>

    <center>
    <div class="catalogo">
        <ul class="catalog-list">
            <?php foreach($juegos as $juego): ?>
                <li>
                    <div class="Catalog-Item">
                        <div class="Game-Image"><img src=" <?php echo $juego['imagen'] ?> "></div>
                        <div class="Catalog-Title"><h1><?php echo $juego['nombre'] ?></h1></div>
                        <div class="Catalog-Category"><h4><?php echo $juego['categoria_id'] ?></h4></div>
                        <div class="Catalog-Console"><h5><?php echo $juego['consola_id'] ?></h5></div>
                        <div class="Catalog-Price"><h4><?php echo $juego['precio'] ?></h4></div>

                        <button onclick="location.href = 'Juego.html';">Comprar</button>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>

    </div>
    </center>
<?php include '_footer.php' ?>
</body>
</html>