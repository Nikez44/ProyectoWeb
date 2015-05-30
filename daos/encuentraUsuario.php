<?php

$id = $_GET['id'];

$query = "SELECT * FROM `usuarios` WHERE `id` = $id";

$usuario = ejecutar_query($query)->fetch_array();
