<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 30/05/2015
 * Time: 01:32 PM
 */

require 'global.php';

$query = "INSERT INTO ventas (usuarios_id, juegos_id, cantidad, fecha) SELECT usuarios_id, juegos_id, cantidad, fecha FROM usuarios_has_juegos";

ejecutar_query($query);

$query = "TRUNCATE TABLE  usuarios_has_juegos";

ejecutar_query($query);

