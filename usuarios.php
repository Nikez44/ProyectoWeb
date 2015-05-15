<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 07:22 PM
 */


include 'daos/show_all_usuarios.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Usuarios</title>

    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/tables.css"/>
</head>
<body>

<?php include '_header.php' ?>

    <div class="table_up" id="content">
        <h2 class="title">Usuarios</h2>

        <a href="#" class="button btn_table">Nuevo Usuario</a>
        <div class="clear"></div>
    </div>

    <div class="wrap-table" id="content">
        <table align="center">
            <thead>
            <tr>
                <td> Nombre </td>
                <td> Apellido </td>
                <td> Email </td>
                <td> Password </td>
                <td> Admin </td>
                <td> Operaciones </td>
            </tr>
            </thead>

            <tbody>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td> <?php echo $usuario['name'] ?> </td>
                    <td> <?php echo $usuario['apellido'] ?> </td>
                    <td> <?php echo $usuario['email'] ?> </td>
                    <td> <?php echo $usuario['password'] ?> </td>
                    <td> <?php echo $usuario['admin'] ?> </td>
                    <td>
                        <a href="#">Modificar</a>
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>

        </table>
    </div>

<?php include '_footer.php'?>

</body>
</html>