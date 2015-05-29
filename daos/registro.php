<?php
/**
 * Created by PhpStorm.
 * User: hyuchiha
 * Date: 13/05/15
 * Time: 11:49 AM
 */

include 'global.php';

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellidos'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if ($nombre == '' or $apellido == '' or $email == '' or $password == '') {
    echo 'Por favor llene todos los campos.';
} else {

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = ejecutar_query($sql);

    if(!$result->num_rows > 0){
        if($password == $password2){

            $sql = "INSERT INTO `proyectoweb`.`usuarios` (`name`, `apellido`, `email`, `password`, `admin`) VALUES ('$nombre', '$apellido', '$email', '$password', '0')";
            ejecutar_query($sql);

            echo 'Usted se ha registrado correctamente.';

        } else {
            echo 'Las claves no son iguales, intente nuevamente.';
        }
    } else {
        echo 'Este usuario ya ha sido registrado anteriormente.';
    }
}
