<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>¿Quiénes Somos?</title>
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
       
       <div class="imageTienda">
           
           <img src="Imagenes/f.jpg" alt="">
           
       </div>
       
       <div class="informacion">
           
           <h3>¿Quienes Somos?</h3><hr>
           
           <p></p>
           
           <p>Somos una tienda de zapatos usados con los mejores precios, ofrecemos todo tipo de zapatos usados (sandalias, botas, tenis, zapatillas, etc) </p>
           
           <p>Nuestra misión es ofrecer a nuestros clientes los zapatos con la mejor calidad al mejor precio del mercado.</p>
           
           <h3>Dueños de la Tienda</h3><br>
           
           <section class="David">
               
               <img src="Imagenes/usuariohomero.jpeg" class="imgDavid" alt="">
               
               <p>José David López<br>
               Cel: 8433-3723</p>
           </section>
           
           <section class="Mario">
               
               <img src="Imagenes/hormerousuario2.jpg" class="imgMario" alt="">
               
               <p>Mario José Manzanares <br>
               Cel: 8333-6841</p>
               
           </section>
           
       </div>
       
   </div>
    
</body>
</html>