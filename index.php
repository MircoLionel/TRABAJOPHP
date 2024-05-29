<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Rutas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5">
    <h1>Registro individual de pasajero</h1>
    <form>
        <div class="mb-3">
            <label for="nombreEscuela" class="form-label">Nombre de Escuela</label>
            <input type="text" class="form-control" id="nombreEscuela" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" required>
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">Nombre de Escuela</label>
            <input type="number" class="form-control" id="dni" required>
        </div>
        <div class="mb-3">
            <label for="fecNac" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fecNac" required>
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Grado</label>
            <input type="number" class="form-control" id="grado" required>
        </div>
        <div class="mb-3">
            <label for="curso" class="form-label">Seccion</label>
            <input type="text" class="form-control" id="seccion" required>
        </div>
        <div class="mb-3">
            <label for="turno" class="form-label">Turno</label>
            <input type="text" class="form-control" id="turno" required>
        </div>
            <div class="mb-3">
                <p>Nombre docente</p>
                <select class="form-select form-select-lg"name="Docente"id="docente">Docente a cargo
                    <option value="1">Roxana</option>
                    <option value="2">Marilu</option>
                    <option value="3">Valeria</option>
                    <option value="4">Cintia</option>
                    <option value="5">Norma</option>
                </select required>
            </div>
           
        
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    
    <?php
        include ("header.php");
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>