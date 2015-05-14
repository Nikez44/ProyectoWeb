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
</head>
<body>

<?php include '_header.php' ?>

<a href="#" class="button">Nuevo Usuario</a>

<table>
    <thead>
    <tr>
        <td>
            Nombre
        </td>
        <td>
            Apellido
        </td>
        <td>
            Email
        </td>
        <td>
            Password
        </td>
        <td>
            Admin
        </td>
        <td>
            Operaciones
        </td>
    </tr>
    </thead>

    <tbody>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td>
                <?php echo $usuario['name'] ?>
            </td>
            <td>
                <?php echo $usuario['apellido'] ?>
            </td>
            <td>
                <?php echo $usuario['email'] ?>
            </td>
            <td>
                <?php echo $usuario['password'] ?>
            </td>
            <td>
                <?php echo $usuario['admin'] ?>
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