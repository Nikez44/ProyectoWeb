<?php

 
session_start();
include 'daos/global.php';

$consultaJuego = "select juegos.id, juegos.nombre, juegos.precio, juegos.cantidad, juegos.imagen, juegos.categoria_id,
        juegos.consola_id, categoria.nombre AS 'nombre_categoria', consola.nombre AS 'nombre_consola' 
        from juegos inner join categoria on juegos.categoria_id = categoria.id inner join consola on
        juegos.consola_id = consola.id where juegos.nombre = 'FIFA 15' ORDER BY `juegos`.`id` ASC";
$juegos = ejecutar_query($consultaJuego);
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Juegos</title>
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/juegos.css"/>
</head>
<body>

    <?php include '_header.php' ?>
    <div id="content">

        <div class="wrap-title">
            <h2 class="title">FIFA 15-SIENTE EL JUEGO</h2>
            <div class="clear"></div>
        </div>

        <div class="catalogo">
            <ul class="catalog-list" id="triple">
                <?php foreach($juegos as $juego): ?>
                    <li>
                        <div class="Catalog-Item">
                            <div class="Game-Image"><img src=" <?php echo $juego['imagen'] ?> "></div>
                            <div class="Catalog-Title"><h1><?php echo $juego['nombre'] ?></h1></div>
                            <div class="Catalog-Category"><h2>Categoria: <?php echo $juego['nombre_categoria'] ?></h2></div>
                            <div class="Catalog-Console"><h3>Disponible para: <?php echo $juego['nombre_consola'] ?></h3></div>
                            <div class="Catalog-Price"><h3>Precio: <?php echo $juego['precio'] ?></h3></div>
                            
                            

                        </div>
                    </li>
                    <li>
                        <div class="descripcionJuego">
                            <div>
                            <p>
                                <video id="fifa15" src="videos/fifa15.mp4" width="760" height="400" controls preload></video>
                            </p>
                        </div>
                            <div class="info"><p>INTELIGENCIA EMOCIONAL: Por primera vez en la historia, los jugadores 
                                    tienen memoria y mostrar&aacute;n sus emociones con base en el contexto del partido. 
                                Con m&aacutes de 600 nuevas reacciones emotivas, los jugadores ahora responden en 
                                los momentos de cambio en la cancha, malas entradas, oportunidades perdidas, 
                                goles &eacutepicos, tal como lo har&iacutean en la vida real.</p> 
                                <p>
                                    Las entradas fuertes, oportunidades p&eacuterdidas y metas cruciales despertar&aacuten 
                                    en los 22 jugadores en la cancha una reacci&oacuten natural basada en lo que est&aacute 
                                    ocurriendo en el partido.
                                </p>
                                <p>
                                    Los gestos y el lenguaje corporal te permitir&aacuten sentir las actitudes y 
                                    emociones de tus jugadores favoritos.
                                    
                                </p>
                                <p>
                                    <img src="images/fifa15.jpg">
                                    Con m&aacutes de 600 nuevas reacciones emocionales, los jugadores ahora reaccionan 
                                    ante los grandes momentos sobre la cancha, tal y como lo har&iacutean en carne propia. 
                                    Cada jugador tiene una actitud o sentimiento hacia cada compa&ntilde;ero de equipo y 
                                    oponente en la cancha.
                                </p>
                            </div>

                        </div>
                    </li>
                    
                <?php endforeach ?>
            </ul>
            
        </div>
    </div>

<?php include '_footer.php' ?>
</body>
</html>