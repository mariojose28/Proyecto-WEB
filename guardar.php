<?php
//Conectamos con el servidor, crear variable y pasar parametros de dir del servidor 
$conectar=mysqli_connect('localhost','root','');
if(!$conectar){
	echo"No se pudo conectar con el servidor";
} 
else{
	$base=mysqli_select_db($conectar, 'LosGranadinos');//conectar con la base de datos creada
	if(!$base){
		echo"No se Encontro la base de datos";
	}
}

//recuperar las variables igual a las variables internas del php y lo que van dentro de corchete
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad = $_POST['edad'];
$sexo = $_POST['gender'];
$celular = $_POST['tel'];
$correo = $_POST['email'];
$usuario = $_POST['usuario'];
$pass = $_POST['contra'];

    
    $query="INSERT INTO cliente (Nombre, Apellido, Edad, Sexo, Celular, Correo) VALUES ('$nombre', '$apellido', '$edad', '$sexo', '$celular', '$correo')";
 
    mysqli_query($conectar, $query) or die("NO PUDO INGRESAR EL CLIENTE");
    
    if(isset($_POST['nombre'])){
    
    $id = mysqli_insert_id($conectar);
    $query2="INSERT INTO usuario (idUsuario, Usuario, Contra) VALUES ('$id','$usuario', '$pass')";
    
    mysqli_query($conectar, $query2);
        
        echo '	<script type="text/javascript" LANGUAGE=javascript>
   window.alert("Registro Satisfactorio")
</SCRIPT> ';
    
}else{
    
    mysqli_query($conectar, $query2).mysqli_error() or die("NO PUDO INGRESAR EL USUARIO");
        
}

echo '	<script type="text/javascript" LANGUAGE=javascript>
   window.history.go(-2)
</SCRIPT> ';

?>