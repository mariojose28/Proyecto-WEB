<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1, maximun-scale = 1">
	<title>Tienda Los Granadinos</title>
	<link rel="shorcut icon" href="Logos&Iconos/LogoZapato.png" type="image/x-icon">
	<link rel="stylesheet" href="CSS/Estilo.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Josefin+Slab|Open+Sans+Condensed:300|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Niconne" rel="stylesheet">
    
</head>
    
<body>
   
    <img src="Imagenes/fz.jpg" alt="" class="fondo">
    
    <header>
        
        <ul class="Redes-Sociales">
		
		<li><a target="_blank" href="https://www.facebook.com/losgranadinos2017/"><img src="Logos&Iconos/facebook.png" alt=""></a></li>

		<li><a target="_blank" href="https://twitter.com/tiendagranadino"><img src="Logos&Iconos/Twitter.png" alt=""></a></li>

		<li><a target="_blank" href="https://plus.google.com/collection/kKgtCE"><img src="Logos&Iconos/Google+.png" alt=""></a></li>

		<li><a href="#"><img src="Logos&Iconos/Whatsapp.png" alt=""></a></li>

	</ul>

        <div class="Logo-Superior">

	        <a href="index.php" class="enlacelogo"><img src="Logos&Iconos/LogoZapato.png" alt="" class="logo"></a>	

	</div>

        <div class="Wrapper-Header">
        
            <h5><?php

	session_start();

	 if (!isset($_SESSION["usuario"])) {
	 	
	 	//Redirige a la pagina de login
	 	echo '<a href="Form.html">Regístrate</a> o <a href="login.html">Inicia sesión</a>';
	 }else{
         
         echo 'Bienvenido Usuario '
.$_SESSION["usuario"];
         
         echo '<a href="">Cierra Session</a>';
         
     }
                
                ?></h5>
    
            <h4>"Tienda de zapatos usados Los Granadinos"</h4>
            
	<nav class="menu">
		
		<a href="index.php">Inicio</a>
		<a href="QuienesSomos.php">¿Quiénes somos?</a>
		<a href="ubicacion.php">Ubicación</a>
		<a href="#">Contacto</a>

	</nav>

</div>

</header>
        
<script>

var slideIndex = 1;

showDivs(slideIndex);

function plusDivs(n) {
	showDivs(slideIndex += n);
}

function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("myslides");

	if (n > x.length) {slideIndex = 1}
		if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}

			x[slideIndex-1].style.display = "block";
}
    </script>
    
<div class="Container">
        
    <div class="Izquierda">
        
        <div class="Flecha-Izquierda">
            
            <a class="enlace-DirPrev" href="#" onclick="plusDivs(-1)"><img title="Previous" src="Logos&Iconos/Dir-Izquierda.png" alt=""></a> 
            
        </div>
		
	</div>
        
    <div class="Centro">
        
        <div class="SlideShow">
            
            <a href="#"><img src="Imagenes/tienda1.jpg" alt="" class="myslides"></a>
		    <a href="#"><img src="Imagenes/tienda2.jpg" alt="" class="myslides"></a>
		    <a href="#"><img src="Imagenes/tienda3.jpg" alt="" class="myslides"></a>
		    <a href="#"><img src="Imagenes/tienda4.jpg" alt="" class="myslides"></a>
           
           <h2>Conozca el interior de nuestra Tienda</h2>
            
        </div>
            
	    </div>

        <div class="Derecha">
        
                <div class="Flecha-Derecha">
                
                    <a href="#" onclick="plusDivs(+1)"><img onclick="" title="Next" src="Logos&Iconos/Dir-Derecha.png" alt=""></a>
                
                </div>
		
	    </div>
    
</div>
    <a class="Freepick" href="http://www.freepik.com">Designed by mrsiraphol / Freepik</a>
<body>
    
<html>