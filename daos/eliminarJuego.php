<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 28/05/2015
 * Time: 10:30 PM
 */



$id = $_GET['id'];

$query = "DELETE FROM `proyectoweb`.`juegos` WHERE `juegos`.`id` = $id";

ejecutar_query($query);

header("Location: ../juegos.php");

