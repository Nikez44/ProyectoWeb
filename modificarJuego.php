<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 07:04 PM
 */

include 'daos/global.php';
include 'daos/find_one_game.php';
include 'daos/show_all_categorias.php';
include 'daos/show_all_consolas.php';

?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Modificar Juego</title>

    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/tables.css"/>
    <link rel="stylesheet" href="styles/formulario.css"/>
</head>
<body>

<?php include '_header.php' ?>

<div class="table_up" id="content">
    <h2 class="title">Moficiar Juego</h2>

    <a href="juegos.php" class="button btn_table">Regresar</a>
    <div class="clear"></div>
</div>
<div class="wrap-table" id="content">

    <div id="formModificarJuego" name="formModificarJuego">
        <form name="myformModificarJuego" class="myformModificarJuego" method="post" action="daos/actualizarJuego.php" enctype='multipart/form-data'>
            <div class="formulario">
                <div class="column">
                    <label>NOMBRE </label><input type="text" id="nombre" name="nombre" class="form-input" value="<?php echo $juego['nombre'] ?>"><br>


                    <label>PRECIO </label><input type="text" id="precio" name="precio" class="form-input" value="<?php echo $juego['precio'] ?>"><br>


                    <label>CANTIDAD </label><input type="text" id="cantidad" name="cantidad" class="form-input" value="<?php echo $juego['cantidad'] ?>"><br>


                    <div id="div_file">
                        <p id="texto">IMAGEN</p><input  type="file" id="img1" name="img1" required><br>
                    </div>

                    <div>
                        <p>
                            <label>CATEGORIA </label>
                            <select class="cmbCategoria" name="categoria"   >
                                <option value = "0" id="0" > SELECCIONAR CATEGORIA </option>
                                <?php
                                foreach ($categorias as $categoria) {
                                    if ($categoria['id'] === $juego['categoria_id']){
                                        echo '<option value="' . $categoria['id'] . '" id="' . $categoria['id'] . '" selected >' . $categoria['nombre'] . '</option>';
                                    } else {
                                        echo '<option value="' . $categoria['id'] . '" id="' . $categoria['id'] . '" >' . $categoria['nombre'] . '</option>';
                                    }
                                } //end foreach
                                ?>
                            </select>

                        </p>
                    </div>

                    <div>
                        <p>
                            <label>CONSOLA </label>
                            <select class="cmbConsola" name="consola"  >
                                <option value = "0" id="0" > SELECCIONAR CONSOLA </option>
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