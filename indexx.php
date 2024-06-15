<body>
<div class="container w-25 bg-secondary rounded shadow">
    <div class="row align-items-strech">
        <div class="col bg d-none d-lg-block col-md-3 col-lg-3 col-xl-6 rounded">
        </div>
        <div class="col bg-grey p-5 rounded-end">
            <div class="text-end">
            <img src="" width="48">
            </div>

            <h2 class="fw-bold text-center py-5">Bienvenido</h2>
    

            
            <form id="loguin" name="loguin" method="post" action ="index.php">

            <?php
            include("controlador.php");
            ?>


                <div class="mb-4">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" maxlength="10" name="usuario" class="form-control" id="campo_usuario" autofocus>
                </div>
                <div class="mb-4">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="password" maxlength="20" name="clave" class="form-control" id="clave">
                </div>
                
                <div class="d-grid mb-3">
                    <input type="submit" value="Iniciar sesion" name="enviar" class="btn btn-primary" action="registroInd.php" />  
                </div>
                <div class="d-grid">
                    <input type="reset" value="Borrar" class="btn btn-dark" /> 
                </div>
                <div class="my-3"> Nueva cuenta  <span><a href="singup.php">registrate</a></span></div>

                	    
            </form>
        </div>   
    </div>

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>