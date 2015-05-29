<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 29/05/2015
 * Time: 03:53 PM
 */



$id = $_GET['id'];

$query = "SELECT * FROM `juegos` WHERE `id` = $id";

$juego = ejecutar_query($query)->fetch_array();
