<?php
/**
 * Created by PhpStorm.
 * User: hyuchiha
 * Date: 29/04/15
 * Time: 10:12 AM
 */

include 'daos/global.php';

session_start();

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$sql = "SELECT `name`, `password` FROM usuarios WHERE `name` = '$usuario' AND `password`='$password'";

$result = ejecutar_query($sql);

if($result->num_rows > 0){

    $usuario = $result->fetch_assoc();

    $_SESSION['login_user']= $usuario['name'];
    $_SESSION['admin']= $usuario['admin'];
    header("Location: index.php");

}else{
    header("Location: ingresa.html?error=1");
}
?>