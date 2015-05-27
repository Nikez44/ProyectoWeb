<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 07:04 PM
 */



$query1 = "select * from consola";

     $con = mysqli_connect(SERVER, USER, PASSWORD, DB_NAME) or die ("Error " . mysqli_error($con));
$consolas = mysqli_query($con,$query1);

?>

