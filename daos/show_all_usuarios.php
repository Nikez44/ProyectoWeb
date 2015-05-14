<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 07:21 PM
 */
include 'global.php';

$query = "select * from usuarios";

$usuarios = ejecutar_query($query);

?>