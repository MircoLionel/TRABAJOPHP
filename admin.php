<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c1a42a0c3a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php include 'funciones.php';
    ?>
</head>

<body class="administracion">
    

    <div class="insccc">

            <form class="formmm" method="post">
                <h1>Formulario Administracion</h1>
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
                            <label for="nombreEscuela" class="form-label">Nombre de Escuela</label>
                            <input type="text" class="form-control" name="nombreEscuela" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>


            </form>
    </div>
    <div class="tabla">
        <div class="col-8 p-3">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Fecha de nac</th>
                    <th scope="col">Escuela</th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                  <?php include 'conexion.php';
                $SQL->query("SELECT * FROM docentes WHERE")
                
                while($datosDoc = $SQL->fetchobject())
                  ?>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>121</td>
                    <td>112</td>
                    <td>
                        <a href=""class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href=""class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
            </table>

        </div>
    </div>

</body>