<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 07:04 PM
 */

include 'global.php';

$query = "select juegos.id, juegos.nombre, juegos.precio, juegos.cantidad, juegos.imagen, juegos.categoria_id,
        juegos.consola_id, categoria.nombre AS 'nombre_categoria', consola.nombre AS 'nombre_consola' 
        from juegos inner join categoria on juegos.categoria_id = categoria.id inner join consola on
        juegos.consola_id = consola.id ORDER BY `juegos`.`id` ASC";

$juegos = ejecutar_query($query);

?>

