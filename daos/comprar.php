<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 30/05/2015
 * Time: 01:32 PM
 */
session_start();

require 'global.php';

$id = $_SESSION['u_id'];
$query = "INSERT INTO ventas (usuarios_id, juegos_id, cantidad, fecha) SELECT usuarios_id, juegos_id, cantidad, fecha FROM usuarios_has_juegos WHERE usuarios_id = $id";

ejecutar_query($query);

$query = "DELETE FROM usuarios_has_juegos WHERE usuarios_id = $id";

ejecutar_query($query);

header("Location: ../carrito.php");
