<?php
/**
 * Created by PhpStorm.
 * User: hyuchiha
 * Date: 29/04/15
 * Time: 10:50 AM
 */

session_start();

session_destroy();

if(isset($_SESSION['id'])){
    unset($_SESSION['id']);
}

header("Location: index.php");

?>