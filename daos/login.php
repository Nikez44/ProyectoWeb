<?php
/**
 * Created by PhpStorm.
 * User: hyuchiha
 * Date: 29/04/15
 * Time: 10:12 AM
 */

include 'global.php';

session_start();

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuarios WHERE `name` = '$usuario' AND `password`='$password'";

$result = ejecutar_query($sql);

if($result->num_rows > 0){

    $usuario = $result->fetch_array();

    $_SESSION['login_user'] = $usuario['name'];
    $_SESSION['u_id']= $usuario['id'];
    $_SESSION['admin'] = $usuario['admin'];
    header("Location: ../index.php");

}else{
    header("Location: ingresa.php?error=1");
}
?>