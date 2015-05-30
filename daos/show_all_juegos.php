<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 07:04 PM
 */

$consola = "";
$categoria = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $consola = $_POST['consola'];
    $categoria = $_POST['categoria'];

    if($categoria == 0){
        $query = "select juegos.id, juegos.nombre, juegos.precio, juegos.cantidad, juegos.imagen, juegos.categoria_id,
        juegos.consola_id, categoria.nombre AS 'nombre_categoria', consola.nombre AS 'nombre_consola'
        from juegos inner join categoria on juegos.categoria_id = categoria.id inner join consola on
        juegos.consola_id = consola.id where consola_id = $consola ORDER BY `juegos`.`id` ASC";
    } else if($consola == 0){
        $query = "select juegos.id, juegos.nombre, juegos.precio, juegos.cantidad, juegos.imagen, juegos.categoria_id,
        juegos.consola_id, categoria.nombre AS 'nombre_categoria', consola.nombre AS 'nombre_consola'
        from juegos inner join categoria on juegos.categoria_id = categoria.id inner join consola on
        juegos.consola_id = consola.id where categoria_id = $categoria ORDER BY `juegos`.`id` ASC";
    } else if($categoria !== 0 && $consola !== 0){
        $query = "select juegos.id, juegos.nombre, juegos.precio, juegos.cantidad, juegos.imagen, juegos.categoria_id,
        juegos.consola_id, categoria.nombre AS 'nombre_categoria', consola.nombre AS 'nombre_consola'
        from juegos inner join categoria on juegos.categoria_id = categoria.id inner join consola on
        juegos.consola_id = consola.id where (consola_id = $consola and categoria_id = $categoria) ORDER BY `juegos`.`id` ASC";
    } else {
        $query = "select juegos.id, juegos.nombre, juegos.precio, juegos.cantidad, juegos.imagen, juegos.categoria_id,
        juegos.consola_id, categoria.nombre AS 'nombre_categoria', consola.nombre AS 'nombre_consola'
        from juegos inner join categoria on juegos.categoria_id = categoria.id inner join consola on
        juegos.consola_id = consola.id ORDER BY `juegos`.`id` ASC";
    }

    $juegos = ejecutar_query($query);

}else{
    $query = "select juegos.id, juegos.nombre, juegos.precio, juegos.cantidad, juegos.imagen, juegos.categoria_id,
        juegos.consola_id, categoria.nombre AS 'nombre_categoria', consola.nombre AS 'nombre_consola'
        from juegos inner join categoria on juegos.categoria_id = categoria.id inner join consola on
        juegos.consola_id = consola.id ORDER BY `juegos`.`id` ASC";

    $juegos = ejecutar_query($query);
}

?>

