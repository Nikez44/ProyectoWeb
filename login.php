<?php
/**
 * Created by PhpStorm.
 * User: hyuchiha
 * Date: 29/04/15
 * Time: 10:12 AM
 */

$usuario = $_POST["usuario"];
$password = $_POST["password"];

session_start();

$conexion = mysql_connect("localhost","root","08001421");
mysql_select_db("web",$conexion);


$sql = "SELECT usuario_nombre,usuario_clave FROM users WHERE usuario_email = '$usuario' AND usuario_clave='$password'";

$comprobar = mysql_query($sql);

if(mysql_num_rows($comprobar) > 0)
{
    $_SESSION['login_user']= $usuario;
    header("Location: index.php");
}
else{
    header("Location: ingresa.html?error=1");

}
?>