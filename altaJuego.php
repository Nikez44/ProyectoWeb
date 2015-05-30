<?php
session_start();
include 'daos/global.php';
include 'daos/show_all_categorias.php';
include 'daos/show_all_consolas.php';

?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>ALTA JUEGOS</title>
       
        <link rel="stylesheet" href="styles/index.css"/>
        <link rel="stylesheet" href="styles/tables.css"/>
        <link rel="stylesheet" href="styles/formulario.css"/>
        
    </head>
    <body>
        
        <?php include '_header.php' ?>
        
        <div class="table_up" id="content">
        <h2 class="title">Alta Juegos</h2>

        <a href="juegos.php" class="button btn_table">Regresar</a>
        <div class="clear"></div>
    </div>
        <div class="wrap-table" id="content">
        <div id="formAltaJuego" name="formAltaJuego">
            <form name="myformAltaJuego" class="myformAltaJuego" method="post" action="daos/altaJuegos.php" enctype='multipart/form-data'>
                <div class="formulario">
                    <div class="column">
                        <label>NOMBRE </label><input type="text" id="nombre" name="nombre" class="form-input" required><br>
                
                
                    <label>PRECIO </label><input type="text" id="precio" name="precio" class="form-input" required><br>
                
                
                    <label>CANTIDAD </label><input type="number" id="cantidad" name="cantidad" class="form-input" min="1" required><br>
                
                   
                    <div id="div_file">
                        <p id="texto">IMAGEN</p><input  type="file" id="img1" name="img1" required><br>
                    </div>
                    
                    <div>
                        <p>
                    <label>CATEGORIA </label>
                    <select class="cmbCategoria" name="categoria" >
                        <?php
                        foreach ($categorias as $categoria) {
                            echo '<option value="' . $categoria['id'] . '" id="' . $categoria['id'] . '" >' . $categoria['nombre'] . '</option>';
                        } //end foreach
                        ?> 
                    </select>
                    
                    </p>
                    </div>
                    
                    <div>
                        <p>
                        <label>CONSOLA </label>
                   <select class="cmbConsola" name="consola"  >
                        <?php
                        foreach ($consolas as $consola) {
                            echo '<option value="' . $consola['id'] . '" id="' . $consola['id'] . '" >' . $consola['nombre'] . '</option>';
                        } //end foreach
                        ?> 
                    </select>
                        </p>
                    </div>
                
                
                   
                   </div>
                   <input  type="submit" id="darAlta" name="darAlta" value="Dar alta" class="form-btn">
                </div>
            </form>
        </div>
        <p>
            <a href="index.php">Ir al inicio</a>
        </p>
        </div>
        <?php include '_footer.php' ?>
    </body>
</html>
