<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php include 'funciones.php';
    ?>
</head>

<body class="administrador">
<h1 class="text-center p-30">CONTROL DE DATOS</h1>    

<div class="formularioadmin">
                <form action="start.php" method="post"  class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" name="usuario" placeholder="Usuario" maxlength="10" require autofocus>
                    <input type="password" name="contraseña" placeholder="Contraseña" maxlength="8"require>
                    <button>Entrar</button>
                </form>
</div>




</body>