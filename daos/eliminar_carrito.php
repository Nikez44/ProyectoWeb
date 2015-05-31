<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 31/05/2015
 * Time: 01:48 PM
 */
include 'global.php';
if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "DELETE FROM usuarios_has_juegos WHERE juegos_id = $id";

    ejecutar_query($query);

    header("Location: ../carrito.php");
}
