<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Rutas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php include 'funciones.php';
    ?>
</head>
<body class="insc">
        
        <form class="form" method="post">
            <h1>Registro individual de pasajero</h1>
            <div class="form__container">
                <div class="form__group">
                    <label for="nombreEscuela" class="form-label">Nombre de Escuela</label>
                    <input type="text" class="form-control" name="nombreEscuela" required>
                </div>
                <div class="form__group">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form__group">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" required>
                </div>
                <div class="form__group">
                    <label for="dni" class="form-label">Documento nacional de identidad</label>
                    <input type="number" class="form-control" name="dni" required>
                </div>
                <div class="form__group">
                    <label for="fecDeNac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecDeNac" required>
                </div>
                <div class="form__group">
                    <label for="grado" class="form-label">Grado</label>
                    <input type="number" class="form-control" name="grado" required>
                </div>
                <div class="form__group">
                    <label for="turno" class="form-label">Turno</label>
                    <input type="text" class="form-control" name="turno" required>
                </div>
                <div class="form__group">
                    <label for="docente" class="form-label">Docente</label>
                    <input type="text" class="form-control" name="docente" required>
                </div>
            </div>

        <button type="submit"method="post" name="check1"class="btn btn-primary">Enviar</button>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>