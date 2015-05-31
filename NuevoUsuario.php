<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Nuevo usuario</title>
    <link rel="stylesheet" href="styles/ingresa.css"/>
    <link rel="stylesheet" href="styles/tables.css"/>
    <link rel="stylesheet" href="styles/formulario.css"/>
    <script type="text/javascript" src="scripts/register.js"></script>
</head>
<body>

<?php include '_header.php' ?>

<div class="table_up" id="content">
    <h2 class="title">Registrar Usuario</h2>

    <a href="usuarios.php" class="button btn_table">Regresar</a>
    <div class="clear"></div>
</div>

<section id="content">
    <div class="container_12">
        <form action="daos/registro.php" method="post" name="fValida" onsubmit="return validar()">
             <div class="formulario">
                <div class="column">


                    <label>NOMBRE </label><input type="text" id="Nombre" name="Nombre" class="form-input" ><br>


                    <label>APELLIDOS </label><input type="text" id="Apellidos" name="Apellidos" class="form-input" ><br>


                    <label>CORREO ELECTRONICO </label><input type="email" id="email" name="email" class="form-input" ><br>


                    <label>CONTRASEÑA </label><input type="password" id="password" name="password" class="form-input" ><br>


                    <label>REPETIR CONTRASEÑA </label><input type="password" id="password2" name="password2" class="form-input" ><br>


                </div>

                <div>
                    <p>
                    <label>ADMIN </label>
                    <br>
                    <input id="admin" name="admin" type="radio" value="1" />Si
                    <br />
                    <input id="admin" name="admin" type="radio" value="0" checked/>No
                    <br />
                    </p>
                </div>

                <input  type="submit" id="registrar" name="registrar" value="Registrar" class="form-btn">
            </div>
        </form>
    </div>
</section>

<?php include '_footer.php' ?>

</body>
</html>