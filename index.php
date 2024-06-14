<?php
    require 'conexion.php';
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loguin</title>
    <link rel="stylesheet" href="style.css">

    
</head>


<body>
    <main>    
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tenes cuenta?</h3>
                    <p>Inicia sesion</p>
                    <button id="ini">Iniciar sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no te registraste?</h3>
                    <p>Registrate</p>
                    <button id="reg">Registrarse</button>
                </div>
            </div>


            <div class="formulario__login-register">
                <form action="" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                <form action="" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Usuario">
                    <input type="email" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Registrarse</button>
                </form>
            </div>

        </div>

    
    </main>

    <script src="script.js"></script>
</body>
</html>