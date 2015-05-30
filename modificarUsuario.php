<?php
session_start();
include 'daos/global.php';
include 'daos/encuentraUsuario.php';

?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Modificar Usuario</title>

    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/tables.css"/>
    <link rel="stylesheet" href="styles/formulario.css"/>
</head>
<body>

<?php include '_header.php' ?>

<div class="table_up" id="content">
    <h2 class="title">Modificar Usuario</h2>

    <a href="usuarios.php" class="button btn_table">Regresar</a>
    <div class="clear"></div>
</div>
<div class="wrap-table" id="content">

    <div id="formModificarJuego" name="formModificarJuego">
        <form name="myformModificarJuego" class="myformModificarJuego" method="post" action="daos/actualizarUsuario.php" enctype='multipart/form-data'>
            <div class="formulario">
                <div class="column">
                    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>"/>

                    <label>NOMBRE </label><input type="text" id="name" name="name" class="form-input" value="<?php echo $usuario['name'] ?>"><br>


                    <label>APELLIDO </label><input type="text" id="apellido" name="apellido" class="form-input" value="<?php echo $usuario['apellido'] ?>"><br>


                    <label>CORREO ELECTRONICO </label><input type="text" id="email" name="email" class="form-input" value="<?php echo $usuario['email'] ?>"><br>


                    <label>CONTRASEÑA </label><input type="text" id="password" name="password" class="form-input" value="<?php echo $usuario['password'] ?>"><br>


                    <label>ADMIN </label><input type="text" id="admin" name="admin" class="form-input" value="<?php echo $usuario['admin'] ?>"><br>


                </div>
                <input  type="submit" id="modificar" name="modificar" value="Actualizar" class="form-btn">
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