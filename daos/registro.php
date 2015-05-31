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
    ?>
    <script languaje="javascript">
        alert("Porfavor llene todos los campos.");
        location.href = "../Registra.php";
    </script>

<?php
} else {

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = ejecutar_query($sql);

    if(!$result->num_rows > 0){
        if($password == $password2){

            $sql = "INSERT INTO `proyectoweb`.`usuarios` (`name`, `apellido`, `email`, `password`, `admin`) VALUES ('$nombre', '$apellido', '$email', '$password', '0')";
            ejecutar_query($sql);

            ?>
            <script languaje="javascript">
                alert("Usted se ha registrado correctamentea");
                location.href = "../login.php";
            </script>

        <?php

        } else {;

            ?>
            <script languaje="javascript">
                alert("Las claves no son iguales, intente nuevamente.");
                location.href = "../Registra.php";
            </script>

        <?php

        }
    } else {

        ?>
        <script languaje="javascript">
            alert("Este usuario ya ha sido registrado anteriormente");
            location.href = "../Registra.php";
        </script>

    <?php

    }
}
