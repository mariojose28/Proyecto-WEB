<?php

try{

	$base =new PDO('mysql:host=localhost;dbname=losgranadinos','root','');

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*
	$dbname= "prueba";
	$mysql_user = "root";
	$mysql_pass = "";
	$server_name = "localhost";

	$conn = mysql_connect( $server_name,$mysql_user,$mysql_pass,$dbname);

	if (!$conn) {
		echo "Connection is not running " .mysqli_connect_error();
	}else{
		echo "Database Running succesfully";
	}*/

	$sql="Select * from usuario where Usuario= :usuario and contra= :contra";

	$resultado = $base->prepare($sql);

	$login=htmlentities(addslashes($_POST["usuario"]));
	$password=htmlentities(addslashes($_POST["contra"]));

	$resultado->bindValue(":usuario",$login);
	$resultado->bindValue(":contra", $password);

	$resultado->execute();

	$numero_registro = $resultado->rowCount();

	if($numero_registro != 0){

		//echo"<h2>Adelante!!</h2>";

		//Inicia una sesion 
		session_start();

		//almacena en la variable super global el usuario registrado
		$_SESSION["usuario"]=$_POST["usuario"]; 
        

		header("location:UsuarioRegistrado.php");

	}else{
		header("location:InicioSesion.php");
	}

}catch(PDOException $e){

	die("Error: " . $e->getMessage());
}

?>