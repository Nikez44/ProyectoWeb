<?php session_start() ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Game Center</title>

    <link rel="stylesheet" href="styles/index.css"/>
</head>
<body>

    <?php include '_header.php'?>

    <?php if($_GET['msg'] == 1){ ?>
        <br><br><p align='center'><span style='color:red;font-size:28px;'>Solo los clientes pueden comprar juegos</span></p>
        <?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        echo "<p align='center'><a href='$url'><span style='font-size:28px;'>Volver atr&aacute;s</span></a></p>"; ?>
    <?php } ?>

    <?php if($_GET['msg'] == 2){ ?>
        <p>EL JUEGO HA SIDO DADO DE ALTA EXITOSAMENTE</p><p><a href='altaJuego.php'>DAR DE ALTA A OTRO JUEGO</a></p>
        <p><a href='juegos.php'>MENU DE JUEGOS</a></p>
    <?php } ?>

    <?php if($_GET['msg'] == 3){ ?>
        <br><br><p align='center'><span style='color:red;font-size:28px;'>Solo se permiten fotograf&iacute;as .jpg y .png</span></p>
        <?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        echo "<p align='center'><a href='$url'><span style='font-size:28px;'>Volver atr&aacute;s</span></a></p>";?>
    <?php } ?>

    <?php if($_GET['msg'] == 4){ ?>
        <br><br><p align='center'><span style='color:red;font-size:28px;'>Imagen muy grande, intenta con una más pequeña</span></p>
        <?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        echo "<p align='center'><a href='$url'><span style='font-size:28px;'>Volver atr&aacute;s</span></a></p>";?>
    <?php } ?>

    <?php include '_footer.php'?>
</body>
</html>