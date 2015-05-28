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
</head>
<body>

    <?php include '_header.php' ?>

    <center>
    <div class="catalogo">

        <ul>
            <?php foreach($juegos as $juego): ?>
                <li>
                    <img src=" <?php echo $juego['imagen'] ?> ">
                    <h3><?php echo $juego['nombre'] ?></h3>
                    <p></p>
                    <h4><?php echo $juego['categoria_id'] ?></h4>
                    <h5><?php echo $juego['consola_id'] ?></h5>
                    <h4><?php echo $juego['precio'] ?></h4>
                    <button>Comprar</button>
                </li>
            <?php endforeach ?>
        </ul>

    </div>
    </center>
<?php include '_footer.php' ?>
</body>
</html>