<?php 
include 'conexion.php';


if (isset($_POST['check1'])) {
    $nombreEscuela = trim($_POST['nombreEscuela']);
    $nombre = trim($_POST['nombre']);
    $apellido = trim( $_POST['apellido']);
    $dni = trim($_POST['dni']);
    $fecDeNac = $_POST['fecDeNac'];
    $grado = trim($_POST['grado']);
    $turno = trim($_POST['turno']);
    $fecDeReg= date("Y-m-d");
    $reg = "INSERT alumno(nombre, apellido, dni, fecDeNac, curso, turno, fecDeReg) VALUES ('$nombre','$apellido','$dni','$fecDeNac','$grado','$turno','$fecDeReg')";
    $resultado = mysqli_query($conexion, $reg);
   if($resultado){
        ?>
        <h3 class ="ok">exito</h3>
        <?php
    } else {
        ?>
        <h3 class ="error">error</h3>
        <?php
    }      
}   


if (isset($_POST['check2'])) {
  
    $usu = trim($_POST['usuario']);
    $cla = trim($_POST['clave']);
    $email = trim($_POST['email']);
    $registrar = "INSERT usuarios(usuario, clave, email) VALUES ('$usu','$cla','$email')";
    $resultado = mysqli_query($conexion, $registrar);
    if($resultado){
        echo "<h3 class ='ok'>exito</h3>";
    } else {
        echo "<h3 class ='error'>error</h3>";
    }
    mysqli_close($conexion);
}



if (isset($_POST["enviar"])) {  
	include ("conexion.php");
	$usu = $_POST['usuario'];
	$cla = $_POST['clave'];
	$consulta = "SELECT * FROM usuarios WHERE usuario='$usu' AND clave='$cla'" ;
	$resultado = mysqli_query($conexion, $consulta);
	$cantFilas = mysqli_num_rows($resultado);
	if ($cantFilas == 1) {
		session_start();   
		$_SESSION["logueado"] = $usu; 
		header("location:principal.php");
	} else {
		echo "<H4 id='errorLoguin'> Usuario y Clave no existen o no coinciden </H4>" ;
	}
	mysqli_close($conexion);
}
?>
