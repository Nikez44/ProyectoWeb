<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 30/05/2015
 * Time: 02:02 PM
 */

include 'global.php';
$ventas = "";
$mes = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mes = $_POST['mes'];
    $query = "SELECT year(fecha), monthname(fecha), sum(ventas.cantidad), juegos_id, juegos.id, juegos.nombre  FROM (ventas INNER JOIN juegos) WHERE (juegos_id = juegos.id AND monthname(fecha) = '$mes') GROUP BY juegos_id
    ORDER BY sum(ventas.cantidad) DESC";

    $ventas = ejecutar_query($query);
}
