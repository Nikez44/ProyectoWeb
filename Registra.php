<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Registrate</title>
    <link rel="stylesheet" href="styles/ingresa.css"/>
    <script type="text/javascript" src="scripts/register.js"></script>
</head>
<body>

<?php include '_header.php' ?>

<section id="content">
    <div class="container_12">
        <h1>Registro de usuarios</h1>
        <form action="daos/registro.php" method="post" name="fValida" onsubmit="return validar()">
            <table>
                <tr>
                    <td>
                        <label for="Nombre">Nombre:</label>
                    </td>
                    <td>
                        <input id="Nombre" name="Nombre" type="text" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Apellidos">Apellidos:</label>
                    </td>
                    <td>
                        <input id="Apellidos" name="Apellidos" type="text" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Correo electronico:</label>
                    </td>
                    <td>
                        <input id="email" name="email" type="email" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Contraseña:</label>
                    </td>
                    <td>
                        <input id="password" name="password" type="password" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password2">Repite la contraseña:</label>
                    </td>
                    <td>
                        <input id="password2" name="password2" type="password" required/>
                    </td>
                </tr>
            </table>

            <br>

            <button type="submit">Registrar</button>
        </form>
    </div>
</section>

<!--==============================content================================-->
<footer>
    <p id="copyright">&copy; 2015 Game Center</p>
</footer>
</body>
</html>