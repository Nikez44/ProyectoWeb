<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 29/05/2015
 * Time: 09:58 PM
 */

$id = $_SESSION['u_id'];

$query = "SELECT DISTINCT usuarios_has_juegos.usuarios_id, usuarios_has_juegos.juegos_id, usuarios_has_juegos.cantidad AS 'cantidad_carr', usuarios_has_juegos.fecha, usuarios.id, juegos.*, consola.id, consola.nombre AS 'nombre_consola', categoria.id, categoria.nombre AS 'nombre_categoria' FROM (usuarios_has_juegos INNER JOIN juegos INNER JOIN usuarios INNER JOIN consola INNER JOIN categoria) WHERE (usuarios_id = usuarios.id AND juegos_id = juegos.id AND juegos.categoria_id = categoria.id AND juegos.consola_id = consola.id) AND usuarios_id =$id";

$mis_juegos = ejecutar_query($query);