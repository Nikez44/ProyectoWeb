<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 02:44 PM
 */

session_start();

?>

<header>
    <div class="main">
        <h1><a href="index.php"></a>GAME CENTER</h1>
        <div class="social-icons">
            <span>Siguenos:</span>
            <div>
                <a href="#" class="icon-3"></a>
                <a href="#" class="icon-2"></a>
                <a href="#" class="icon-1"></a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</header>

<nav>
    <ul class="menu">

        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="#">Catalogo</a></li>

        <?php if(isset($_SESSION['login_user'])){ ?>

            <?php if ($_SESSION['admin'] == 1 ) {?>
                <li><a href="juegos.php">Juegos</a></li>
                <li><a href="usuarios.php">Usuarios</a></li>
            <?php } else { ?>
                <li><a href="#">Ver Carrito</a></li>
            <?php } ?>

            <li><a href="logout.php">Logout</a></li>
            <li>Bienvenido <?php echo $_SESSION['login_user']; ?></li>

        <?php } else { ?>
            <li><a href="ingresa.php">Login</a></li>
        <?php } ?>

    </ul>
    <div class="clear"></div>
</nav>
