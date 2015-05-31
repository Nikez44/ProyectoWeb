<?php
/**
 * Created by PhpStorm.
 * User: Hyuchiha
 * Date: 13/05/2015
 * Time: 07:04 PM
 */
session_start();
include 'daos/global.php';
include 'daos/show_all_juegos.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Catalogo</title>
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/catalogo.css"/>
</head>
<body>

    <?php include '_header.php' ?>
    <div id="content">

        <div class="wrap-title">
            <h2 class="title">Catalogo</h2>
            <div class="right">
                <form action="catalogo.php" method="post">
                    <?php
                    $consolas = array( 0 => 'Seleccione una consola',
                        1 => 'PLAY STATION 3',
                        2 => 'PLAY STATION 4',
                        3 => 'XBOX 360',
                        4 => 'XBOX ONE',
                        5 => 'WII',
                        6 => 'WII U',
                        7 => 'PC');

                    $categorias = array( 0 => 'Seleccione una categoria',
                        1 => 'LUCHA',
                        2 => 'CARRERA',
                        3 => 'DEPORTE',
                        4 => 'ROL',
                        5 => 'SHOOTER')
                    ?>
                    <select name="consola" id="consola">
                        <?php foreach($consolas as $val => $c) { ?>
                            <?php if ($consola == $val) { ?>
                                <option value="<?php echo $val ?>" selected><?php echo $c ?> </option>
                            <?php } else { ?>
                                <option value="<?php echo $val ?>"><?php echo $c ?> </option>
                            <?php } ?>
                        <?php } ?>
                    </select>

                    <select name="categoria" id="categoria">
                        <?php foreach($categorias as $val => $c) { ?>
                            <?php if ($categoria == $val) { ?>
                                <option value="<?php echo $val ?>" selected><?php echo $c ?> </option>
                            <?php } else { ?>
                                <option value="<?php echo $val ?>"><?php echo $c ?> </option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                    <input class="button" type="submit" value="Ver"/>
                </form>
            </div>
            <div class="clear"></div>
        </div>

        <div class="catalogo">
            <ul class="catalog-list" id="triple">
                <?php foreach($juegos as $juego): ?>
                    <li>
                        <div class="Catalog-Item">
                            <div class="Game-Image"><img src=" <?php echo $juego['imagen'] ?> "></div>
                            <div class="Catalog-Title"><h1><?php echo $juego['nombre'] ?></h1></div>
                            <div class="Catalog-Category"><h2>Categoria: <?php echo $juego['nombre_categoria'] ?></h2></div>
                            <div class="Catalog-Console"><h3>Disponible para: <?php echo $juego['nombre_consola'] ?></h3></div>
                            <div class="Catalog-Price"><h3>Precio: <?php echo $juego['precio'] ?></h3></div>

                            <a class="button" href="game.php?g_id=<?php echo $juego['id'] ?>">Ver</a>

                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

<?php include '_footer.php' ?>
</body>
</html>