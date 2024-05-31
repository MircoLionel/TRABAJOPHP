<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loguin</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php include 'funciones.php';
    ?>
</head>


<body>
<div class="container w-10 bg-secondary mt-5 rounded shadow">
    <div class="">
        <div class="col bg d-none d-lg-block col-md-3 col-lg-3 col-xl-6 rounded">
        </div>
        <div class="col bg-grey p-5 rounded-end">
            <div class="text-end">
            <img src="" width="48">
            </div>

            <h2 class="fw-bold text-center py-5">Bienvenido</h2>
    <!--login-->
            <form id="loguin" name="loguin" method="post" action ="index.php">
                <div class="mb-4">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" maxlength="10" name="usuario" class="form-control" id="campo_usuario" autofocus>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" maxlength="8" name="clave" class="form-control" id="password">
                </div>
                <div class="d-grid mb-3">
                    <input type="submit" value="Iniciar sesion" name="enviar" class="btn btn-primary" />  
                </div>
                <div class="d-grid">
                    <input type="reset" value="Borrar" class="btn btn-dark" /> 
                </div>
                <div class="my-3"><span>no tienes cuenta?<a href="#">registrate</a></span></div>

                	    <?php
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
            </form>
        </div>   
    </div>

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>