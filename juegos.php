<?php
/**
 * Created by PhpStorm.
 * User: USER
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
    <title>Juegos</title>

    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/tables.css"/>
    <script type="text/javascript" src="scripts/confirmMessage.js"></script>
</head>
<body>

    <?php include '_header.php' ?>

    <div class="table_up" id="content">
        <h2 class="title">Juegos</h2>

        <a href="altaJuego.php" class="button btn_table">Nuevo Juego</a>
        <div class="clear"></div>
    </div>

    <div class="wrap-table" id="content">
        <table align="center">
            <thead>
                <tr>
                    <td> Nombre </td>
                    <td> Precio </td>
                    <td> Cantidad </td>
                    <td> Imagen </td>
                    <td> Categoria </td>
                    <td> Consola </td>
                    <td> Operaciones </td>
                </tr>
            </thead>

            <tbody>
            <?php foreach($juegos as $juego): ?>
                <tr>
                    <td> <?php echo $juego['nombre'] ?> </td>
                    <td> <?php echo $juego['precio'] ?> </td>
                    <td> <?php echo $juego['cantidad'] ?> </td>
                    <td> <?php echo $juego['imagen'] ?> </td>
                    <td> <?php echo $juego['nombre_categoria'] ?> </td>
                    <td> <?php echo $juego['nombre_consola'] ?> </td>
                    <td>
                        <a href="modificarJuego.php?id=<?php echo $juego['id'] ?>">Modificar</a>
                        <a href="daos/eliminarJuego.php?id=<?php echo $juego['id'] ?>" onclick="return confirmAction()">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>

        </table>
    </div>



    <?php include '_footer.php'?>

</body>
</html>