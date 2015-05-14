<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 07:04 PM
 */

include 'daos/show_all_juegos.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Juegos</title>

    <link rel="stylesheet" href="styles/index.css"/>
</head>
<body>

    <?php include '_header.php' ?>

    <a href="#" class="button">Nuevo Juego</a>

    <table>
        <thead>
            <tr>
                <td>
                    Nombre
                </td>
                <td>
                    Precio
                </td>
                <td>
                    Cantidad
                </td>
                <td>
                    Imagen
                </td>
                <td>
                    Categoria
                </td>
                <td>
                    Consola
                </td>
                <td>
                    Operaciones
                </td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($juegos as $juego): ?>
                <tr>
                    <td>
                        <?php echo $juego['nombre'] ?>
                    </td>
                    <td>
                        <?php echo $juego['precio'] ?>
                    </td>
                    <td>
                        <?php echo $juego['cantidad'] ?>
                    </td>
                    <td>
                        <?php echo $juego['imagen'] ?>
                    </td>
                    <td>
                        <?php echo $juego['categoria_id'] ?>
                    </td>
                    <td>
                        <?php echo $juego['consola_id'] ?>
                    </td>
                    <td>
                        <a href="#">Modificar</a>
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>

    <?php include '_footer.php'?>

</body>
</html>