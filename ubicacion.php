<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubicación</title>
    <link rel="shorcut icon" href="Logos&Iconos/LogoZapato.png" type="image/x-icon">
	<link rel="stylesheet" href="CSS/Estilo.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Josefin+Slab|Open+Sans+Condensed:300|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Niconne" rel="stylesheet">
    <link rel="stylesheet" href="CSS/Style-QuienesSomos.css">
</head>

<body>
   
   <img src="Imagenes/fz.jpg" alt="" class="fondo">
    
    <header>
        
        <ul class="Redes-Sociales">
		
		<li><a href="https://www.facebook.com/losgranadinos2017/"><img src="Logos&Iconos/facebook.png" alt=""></a></li>

		<li><a href="#"><img src="Logos&Iconos/Twitter.png" alt=""></a></li>

		<li><a href="#"><img src="Logos&Iconos/Google+.png" alt=""></a></li>

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
   
   <div class="Container">
       
       <div class="divMp">
           
           <iframe class="mp" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61314.80355121791!2d-86.05783820975672!3d11.951653931779514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x434c71a27c0eb458!2sMercado+Municipal+Ernesto+Fernandez!5e1!3m2!1ses-419!2ses!4v1498574213160" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
           
       </div>
       
       <div class="info">
           
           <h3>Dirección</h3><hr>
           
           <p>Nuestra Tienda se ubica en el Mercado Municipal Ernesto Fernandez, detrás de la terminal de buses de Tipítapa</p>
           
           
       </div>
       
   </div>
    
</body>
</html>