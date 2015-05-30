<?php
include 'global.php';

$id = $_GET['id'];

//Elimino el juego de la base de datos
$query = "DELETE FROM `proyectoweb`.`usuarios` WHERE `usuarios`.`id` = $id";
ejecutar_query($query);

header("Location: ../usuarios.php");
