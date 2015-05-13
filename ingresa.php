<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Ingresa</title>

    <link rel="stylesheet" href="styles/ingresa.css"/>
    <script type="text/javascript" src="scripts/login.js"></script>
</head>
<body>

    <?php include '_header.php' ?>

    <section id="content">
        <div class="container_12">
        <h1>Inicia Sesión</h1>

        <form action="daos/login.php" method="post" onsubmit="return validar()">
            <table>
                <tr>
                    <td>
                        <label for="usuario">Usuario:</label>
                    </td>
                    <td>
                        <input id="usuario" name="usuario" type="text" required/>
                    </td>
                </tr>
                <tr>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Contraseña:</label>
                    </td>
                    <td>
                        <input id="password" name="password" type="password" required/>
                    </td>
                </tr>
            </table>
           <p></p>
            <input type="submit" class="button" value="Entrar"/>
            <a href="registra.php" class="button">Registrate!</a>
        </form>
        </div>
    </section>

    <!--==============================content================================-->
    <footer>
        <p id="copyright">&copy; 2015 Game Center</p>
    </footer>

</body>
</html>