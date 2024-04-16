<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--BOOTSTRAP 5-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <!--BOX-ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--CSS-->
    <link rel="stylesheet" href="css/registrar.css">
<title>Formulario de Registro</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand mx-auto" href="index.html"> <!-- Cambio: Añadir clase mx-auto para centrar -->
            <img src="img/1.png" alt="Logo" width="35px" height="35px" class="d-inline-block align-text-top font">
        </a>
    </div>
</nav>

<article>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 formulario-columna">
      <div class="card shadow">
        <div class="card-body p-5">
          <h2 class="text-center mb-4">Registro</h2>
          
          <form action="../Modelo/ConexionRegistro.php" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" id="nombre" name="nombre" class="form-control" maxlength="50" required>
            </div>
            <div class="mb-3">
              <label for="aPaterno" class="form-label">Apellido Paterno:</label>
              <input type="text" id="aPaterno" name="aPaterno" class="form-control" maxlength="50" required>
            </div>
            <div class="mb-3">
              <label for="aMaterno" class="form-label">Apellido Materno:</label>
              <input type="text" id="aMaterno" name="aMaterno" class="form-control" maxlength="50" required>
            </div>
            <div class="mb-3">
              <label for="correo" class="form-label">Correo electrónico:</label>
              <input type="email" id="correo" name="correo" class="form-control" maxlength="50" required>
            </div>
            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña:</label>
              <input type="password" id="contraseña" name="contraseña" class="form-control" maxlength="16" required>
            </div>
            <div class="mb-3">
              <label for="telefono" class="form-label">Teléfono:</label>
              <input type="tel" id="telefono" name="telefono" class="form-control" pattern="[0-9]{10}" required>
            </div>
            <div class="mb-3">
              <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
              <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" required>
            </div>
             <div class="text-center">
              <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6 imagen-columna">
      <div class="imagen"></div>
    </div>
  </div>
</div>
</article>

</body>
</html>
