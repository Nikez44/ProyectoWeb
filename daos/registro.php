<?php
/**
 * Created by PhpStorm.
 * User: hyuchiha
 * Date: 13/05/15
 * Time: 11:49 AM
 */


include 'global.php';


if ($_POST['Nombre'] == '' or $_POST['Apellidos'] == '' or $_POST['email'] == '' or $_POST['password'] == '') {
    echo 'Por favor llene todos los campos.';
} else {
    $sql = "SELECT * FROM usuarios WHERE email = '$_POST[email]'";
    $result = ejecutar_query($sql);


    if($result->num_rows > 0){
        if($_POST['password'] == $_POST['password2'])
        {
            $nombre = $_POST['Nombre'];
            $apellido = $_POST['Apellidos'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "INSERT INTO `proyectoweb`.`usuarios` (`name`, `apellido`, `email`, `password`, `admin`) VALUES ('$nombre', '$apellido', '$email', '$password', '0')";
            ejecutar_query($sql);

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
