<?php
/**
 * Created by PhpStorm.
 * User: hyuchiha
 * Date: 29/05/15
 * Time: 01:34 PM
 */

session_start();

if (!isset($_SESSION['login_user'])){
    header("Location: ingresa.php");
}

?>