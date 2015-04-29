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

$conexion = mysql_connect("localhost","root","root");
mysql_select_db("web",$conexion);


$sql = "SELECT usuario,password FROM usuarios WHERE usuario = '$usuario' AND password='$password'";

$comprobar = mysql_query($sql);

if(mysql_num_rows($comprobar) > 0)
{
    $_SESSION['login_user']= $usuario;

    header("Location: index3.php");
}
else{
    echo mysql_num_rows($comprobar);
    header("Location: ingresa.html");
}
?>