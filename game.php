<?php
/**
 * Created by PhpStorm.
 * User: Hyuchiha
 * Date: 13/05/2015
 * Time: 07:04 PM
 */

include 'daos/checkLogin.php';
include 'daos/search_specific_game.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Game</title>
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/GameView.css"/>
</head>
<body>

<?php include '_header.php' ?>

<form action="daos/buyGame.php" method="post">
    <div class="imageGame">
        <img src=" <?php echo $game['imagen'] ?> ">
    </div>
    <div class="info">
        <h1><?php echo $game['nombre'] ?></h1><br>
        <h2>Categoria: <?php echo $game['nombre_categoria'] ?></h2><br>
        <h3>Disponible para: <?php echo $game['nombre_consola'] ?></h3><br>
        <h3>Precio: <?php echo $game['precio'] ?></h3><br>

        <input type="hidden" name="g_id" value="<?php echo $game['id'] ?>" >

        <label for="g_qty">Cantidad</label>
        <input id="g_qty" name="g_qty" type="number" max="10" min="1" value="1"><br>

        <button type="submit">Comprar</button>
    </div>


</form>

<?php include '_footer.php' ?>
</body>
</html>