<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 28/05/2015
 * Time: 10:30 PM
 */

include 'global.php';

$id = $_GET['id'];

$query = "SELECT * FROM `juegos` WHERE `id` = $id";
$juego = ejecutar_query($query)->fetch_array();
//Elimino el archivo de la imagen del juego
unlink("../".$juego['imagen']);

//Elimino el juego de la base de datos
$query = "DELETE FROM `proyectoweb`.`juegos` WHERE `juegos`.`id` = $id";
ejecutar_query($query);

header("Location: ../juegos.php");

