<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 03/05/2015
 * Time: 01:02 PM
 */


define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', '08001421');
define('DB_NAME', 'proyectoweb');

function ejecutar_query($query)
{
    $con = mysqli_connect(SERVER, USER, PASSWORD, DB_NAME) or die ("Error " . mysqli_error($con));
    return mysqli_query($con, $query);
}
