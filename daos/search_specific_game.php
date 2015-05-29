<?php
/**
 * Created by PhpStorm.
 * User: hyuchiha
 * Date: 29/05/15
 * Time: 01:01 PM
 */



if (isset($_GET['g_id'])){
    $Game_id= $_GET['g_id'];

    $query = "select juegos.id, juegos.nombre, juegos.precio, juegos.cantidad, juegos.imagen, juegos.categoria_id,
        juegos.consola_id, categoria.nombre AS 'nombre_categoria', consola.nombre AS 'nombre_consola'
        from juegos inner join categoria on juegos.categoria_id = categoria.id inner join consola on
        juegos.consola_id = consola.id WHERE juegos.id= '$Game_id' ORDER BY `juegos`.`id` ASC";

    $result = ejecutar_query($query);

    $game = $result->fetch_assoc();
}else{
    header('location: catalogo.php');
}

?>