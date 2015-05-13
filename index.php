<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Game Center</title>
    <script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.slidertron-0.1.js"></script>
    <script type="text/javascript" src="scripts/jquery.bxslider.js"></script>
    <link rel="stylesheet" href="styles/index2.css"/>
    <link rel="stylesheet" href="styles/slidertron.css"/>
    <link rel="stylesheet" href="styles/jquery.bxslider.css"/>
    
</head>
<body>

<header>
    <div class="main">
        <h1><a href="index.html"></a>GAME CENTER</h1>
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
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Catalogo</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Videos</a></li>
        <li><a href="#">Contacto</a></li>

        <?php

            session_start();

            if(isset($_SESSION['login_user'])){
                echo '<li class="session">Bienvenido '. $_SESSION['login_user'].' <a href="logout.php">Logout</a></li>';
            }
            else{
                echo '<li><a href="ingresa.html">Login</a></li>';
            }
        ?>

    </ul>
    <div class="clear"></div>
</nav>


<!---- <div id="slideshow">
	<div id="foobar">
            <div id="col1"><a href="#" class="previous" style="color: #ffffff">&nbsp;</a></div>
		<div id	="col2">
			<div class="viewer">
				<div class="reel">
                                    <div class="slide"><img src="images/maxresdefault.jpg" width="726" height="335" alt="" /> <span>LOS MEJORES JUEGOS</span> </div>
                                    <div class="slide"><img src="images/Gears3.jpg" width="726" height="335" alt="" /> <span>LA MEJOR ACCI�N EN VIDEOJUEGOS</span> </div>
                                    <div class="slide"><img src="images/Logo-Halo-4.jpg" width="726" height="335" alt="" /> <span>LO M�S POPULAR</span> </div>
				</div>
			</div>
		</div>
		<div id="col3"><a href="#" class="next">&nbsp;</a></div>
	</div>
	<script type="text/javascript">
		$('#foobar').slidertron({
		viewerSelector:		'.viewer',
		reelSelector:		'.viewer .reel',
		slidesSelector:		'.viewer .reel .slide',
		navPreviousSelector:'.previous',
		navNextSelector:	'.next',
		navFirstSelector:	'.first',
		navLastSelector:	'.last'
		});
	</script>
</div>  -->
<div id="slider">
    <ul class="bxslider">
  <li><img src="images/maxresdefault.jpg" width="1350" height="620" style="text-align:center;"/></li>
  <li><img src="images/Gears3.jpg" width="1350" height="620" /></li>
  <li><img src="images/Logo-Halo-4.jpg" width="1350" height="620" /></li>
  
</ul>
</div>
<!--==============================content================================-->
<section id="content">

    <div class="ic"></div>

    <div class="container_12 top-1">

        <div class="grid_4 box-1">
            <img src="images/Ferrari-img.jpg" alt="">
            <a href="#"><span class="clr-1">¡Siente</span> la velocidad!</a>
        </div>

        <div class="grid_4 box-1">
            <img src="images/Futbol-img.jpg" alt="">
            <a href="#"><span class="clr-1">¡Gana</span> la copa!</a>
        </div>

        <div class="grid_4 box-1">
            <img src="images/Heroes-img.jpg" alt="">
            <a href="#"><span class="clr-1">¡Salva</span> al mundo!</a>
        </div>

        <div class="grid_12">
            <div class="line pad-1"></div>
        </div>

        <div class="grid_4">
            <h2 class="p2">Bienvenido</h2>
            <img src="images/Games-img.jpg" alt="">
            <p class="text-1 top-2 p3">Game Center, tu sitio de videojuegos</p>
            <p>¿Eres un aficionado a los juegos?, ¿estas en busca de nuevas experiencias?<br>
                ¡Conoce nuestra gran variedad de titulos en videojuegos! te garantizamos encontraras
                algo para ti, ¡forma parte de nosotros!</p>
            <a href="#" class="button top-3">Registrate</a>
                ó   
            <a href="ingresa.html" class="button">Ingresa</a>
        </div>

        <div class="grid_4">
            <div class="left-1">

                <h2 class="p4">Top Ventas</h2>
                <div class="wrap">
                    <div class="number">1</div>
                    <p class="extra-wrap border-bot-1"><span class="clr-1">FIFA 15</span><br>
                        El juego de futbol mas popular en el mundo:<a href="#" target="_blank" class="link"> FIFA 15</a>  de EA SPORTS. </p>
                </div>

                <div class="wrap">
                    <div class="number">2</div>
                    <p class="extra-wrap border-bot-1"><span class="clr-1">HALO 3</span><br>
                        Juego de una de las sagas survival mas exitosas: <a href="#" target="_blank" class="link"> HALO 3</a> de Microsoft Studios.</p>
                </div>

                <div class="wrap">
                    <div class="number">3</div>
                    <p class="extra-wrap"><span class="clr-1">NFS RIVALS</span><br>
                        La entrega mas reciente de la franquicia Need For Speed: <a href="#" class="link"> NFS Rivals </a> de EA.</p>
                </div>

            </div>
        </div>

        <div class="grid_4">
            <div class="left-2">
                <h2 class="p4">Estrenos y proximas entregas</h2>
                <div class="wrap border-bot-1">
                    <img src="images/GTA-img.jpg" alt="" class="img-indent">
                    <p class="extra-wrap"><span class="clr-1">¡Por fin para PC!</span><br>
                        <a href="#" class="link">Ver en catalogo</a><br> Entra y obten la recien liberada GTA 5 para PC.</p>
                </div>
                <div class="wrap border-bot-1">
                    <img src="images/Wolf-img.jpeg" alt="" class="img-indent">
                    <p class="extra-wrap"><span class="clr-1">Wolfenstein: the old blood</span><br>
                        <a href="#" class="link">¡Apartalo ahora!</a><br> La nueva entrega de Wolfenstein sera liberada en Abril, pero en Game Center puedes apartarla ahora.</p>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
    auto: true
  });
});
    </script>
</section>

<!--==============================content================================-->
<footer>
    <p id="copyright">&copy; 2015 Game Center</p>
</footer>

</body>
</html>