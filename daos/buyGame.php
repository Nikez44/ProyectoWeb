<?php
/**
 * Created by PhpStorm.
 * User: hyuchiha
 * Date: 29/05/15
 * Time: 12:41 PM
 */

include 'global.php';
session_start();


$user_id = $_SESSION["u_id"];
$Game_id= $_POST['g_id'];
$Game_qty = $_POST["g_qty"];
$date = date("Y-m-d H:i:s");

$queryCompra = "INSERT INTO usuarios_has_juegos(usuarios_id, juegos_id, cantidad, fecha) VALUES($user_id,'$Game_id', '$Game_qty' ,'$date')";

ejecutar_query($queryCompra);







header('location: catalogo.php');
?>