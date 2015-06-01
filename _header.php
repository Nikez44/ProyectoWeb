<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 02:44 PM
 */
?>

<header>
    <div class="main">
        <h1><a href="index.php"></a>GAME CENTER</h1> <img class="logo" src="images/logo2.jpg" width="170" height="100">
        <div class="social-icons">
            <span>Siguenos:</span>
            <div>
                <a href="https://plus.google.com/" class="icon-3"></a>
                <a href="https://www.facebook.com/" class="icon-2"></a>
                <a href="https://twitter.com/?lang=es" class="icon-1"></a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</header>

<nav>
    <ul class="menu">

        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="catalogo.php">Catalogo</a></li>

        <?php if(isset($_SESSION['login_user'])){ ?>

            <?php if ($_SESSION['admin'] == 1 ) {?>
                <li><a href="juegos.php">Juegos</a></li>
                <li><a href="usuarios.php">Usuarios</a></li>
                <li><a href="ventas.php">Ventas</a></li>
            <?php } else { ?>
                <li><a href="carrito.php">Ver Carrito</a></li>
            <?php } ?>

            <li><a href="daos/logout.php">Logout</a></li>
            <li>Bienvenido <?php echo $_SESSION['login_user']; ?></li>

        <?php } else { ?>
            <li><a href="ingresa.php">Login</a></li>
        <?php } ?>

    </ul>
    <div class="clear"></div>
</nav>
