<?php


include 'global.php';

$id = $_POST["id"];
$name = $_POST["name"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];
$admin = $_POST["admin"];


$query = "UPDATE usuarios SET name = '$name', apellido = '$apellido', email = '$email', password = '$password', admin = '$admin' WHERE id = $id";    
    ejecutar_query($query);
    header("Location: ../usuarios.php");
