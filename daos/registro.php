<?php
/**
 * Created by PhpStorm.
 * User: hyuchiha
 * Date: 13/05/15
 * Time: 11:49 AM
 */


$conexion = mysql_connect("localhost", "root", "root");
mysql_select_db("proyectoweb", $conexion);


if ($_POST['Nombre'] == '' or $_POST['Apellidos'] == '' or $_POST['email'] == '' or $_POST['password'] == '') {
    echo 'Por favor llene todos los campos.';
} else {
    $sql = 'SELECT * FROM usuarios';
    $rec = mysql_query($sql);
    $existe_Usuario = false;

    while ($result = mysql_fetch_object($rec)) {
        if ($result->email == $_POST['email']) {
            $existe_Usuario = true;
        }
    }

    if (!$existe_Usuario) {

        if($_POST['password'] == $_POST['password2'])
        {
            $nombre = $_POST['Nombre'];
            $apellido = $_POST['Apellidos'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "INSERT INTO `proyectoweb`.`usuarios` (`name`, `apellido`, `email`, `password`, `admin`) VALUES ('$nombre', '$apellido', '$email', '$password', '0')";
            mysql_query($sql);

            echo 'Usted se ha registrado correctamente.';

        }
        else
        {
            echo 'Las claves no son iguales, intente nuevamente.';
        }
    } else {
        echo 'Este usuario ya ha sido registrado anteriormente.';
    }
}
