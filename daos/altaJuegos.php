<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 07:04 PM
 */

include 'global.php';

$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$categoria = $_POST["categoria"];

$consola = $_POST["consola"];

//SUBIMOS LA IMAGEN


      if (is_uploaded_file($_FILES['img1']['tmp_name'])){
         
      //recojo la imagen
      $imagen = $_FILES['img1']['name'];
      //Obtengo el nombre de la imagen y la extensi�n de la foto
      $imagen1 = explode(".",$imagen);
      if(($imagen1[1] == "jpg") || ($imagen1[1] == "png")){
              //Genero un nombre aleatorio con n�meros y se asigno la extensi�n obtenida anteriormente
              $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];
            //Coloco la imagen en la carpeta correspondiente con el nuevo nombre
            move_uploaded_file($_FILES['img1']['tmp_name'], "../images/games/".$imagen2);
            //Asigno a la foto permisos
            $ruta="images/games/".$imagen2;
            
                
            $query = "Insert into juegos (nombre, precio, cantidad, imagen, categoria_id, consola_id) values('$nombre','$precio','$cantidad','$ruta','$categoria','$consola')";

            $juegos = ejecutar_query($query);
            echo "<link rel='stylesheet' href='../styles/index.css'/>";
            echo "<link rel='stylesheet' href='../styles/tables.css'/>";
            echo include '../_header.php';
            echo "<p>EL JUEGO HA SIDO DE ALTA EXITOSAMENTE</p><p><a href='altaJuego.php'>DAR DE ALTA A OTRO JUEGO</a></p>";
            echo "<p><a href='juegos.php'>MEN� DE JUEGOS</a></p>";
            echo include '../_footer.php';
            }else{
                  echo "<br><br><p align='center'><span style='color:red;font-size:28px;'>Solo se permiten fotograf&iacute;as .jpg y .png</span></p>";
                  echo "<p align='center'><a href='subir_imagenes.php'><span style='font-size:28px;'>Volver atr&aacute;s</span></a></p>";
            }
      } 




?>

