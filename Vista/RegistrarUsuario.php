<!--**********HTML ZONE**********-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP 5-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!--CSS 3-->
    <link rel="stylesheet" href="css/style.css">
    <title>LOGIN!</title>
</head>
<body>

<!--HEADER-->
    <header>
        <img src="img/header.jpg" alt="">
    </header>

<!-----Navbar -->
<nav class="navbar navbar-expand-lg fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="img/1.png" alt="Logo" width="35px" height="35px" class="d-inline-block align-text-top font">
            MIDGARD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="catalago.html">Catálogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" aria-disabled="true">Acerca de...</a>
                        </li>
                    </ul>
                    <div class="btn-nav">
                        <button class="btn btn-outline-light btn-sec"><a class="nav-link" href="RegistrarUsuario.php">Registrarse</a></button>
                        <button class="btn btn-outline-primary btn-pri"><a class="nav-link" aria-disabled="true">Iniciar sesión</a></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicia Sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="RegistrarUsuario.php">Registrate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--FORMULARIO-->
<div class="container" style="padding: 10px;">
        <div class="row">
            <div class="col"></div>
                <div class="formu">
                    <!-- Encabezado -->
                    <h1>Registrese aqui!</h1>

                    <form action="" method="post">
                        <div class="row g-3">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Correo" aria-label="Número" id="numero" name="correo" required> <!--INPUT NUMERO-->
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Contraseña" aria-label="Matricula" id="matricula" name="clave" required> <!--INPUT MATRICULA-->
                            </div>
                        </div>
                            <!-- <br>
                        <div class="row g-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Correo" aria-label="Nombre" id="nombre" name="correo" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Contraseña" aria-label="Apellido Paterno" id="aPaterno" name="clave" required>
                            </div>
                        </div> -->
                        <!-- <br>
                        <select class="form-select" aria-label="Default select example" id="idGrado" name="idGrado" required>
                            <option value="" selected disabled>Grado y Grupo</option>
                            <option value="1J">1J</option>
                            <option value="1K">1K</option>
                            <option value="2J">2J</option>
                            <option value="2K">2K</option>
                            <option value="3J">3J</option>
                            <option value="3K">3K</option>
                            <option value="4J">4J</option>
                            <option value="4K">4K</option>
                            <option value="5J">5J</option>
                            <option value="6J">6J</option>
                            <option value="6K">6K</option>
                            <option value="7J">7J</option>
                            <option value="7K">7K</option>
                            <option value="8J">8J</option>
                            <option value="8K">8K</option>
                            <option value="9J">9J</option>
                        </select> -->
                            <br>
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                    </form>
                    <?php
                    // Verificamos si se ha enviado el formulario
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        // Crear conexión
                        $conexion = new mysqli("localhost", "root", "Coreanosexi1.", "bd_gestionescolar2");

                        // Verificar conexión
                        if ($conexion->connect_error) {
                            die("Error en la conexión: " . $conexion->connect_error);
                        }

                        // Obtener los datos del formulario
                        $matricula = $_POST["matricula"];
                        $nombre = $_POST["nombre"];
                        $aPaterno = $_POST["aPaterno"];
                        $aMaterno = $_POST["aMaterno"];
                        $idGrado = $_POST["idGrado"];

                        // Verificar si la matrícula ya existe en la base de datos
                        $consulta = "SELECT nombre, aPaterno, aMaterno FROM t_alumnos WHERE matricula = '$matricula'";
                        $resultado = $conexion->query($consulta);

                        if ($resultado->num_rows > 0) {
                            // La matrícula ya existe, obtener el nombre del alumno
                            $fila = $resultado->fetch_assoc();
                            $nombreExistente = $fila["nombre"] . " " . $fila["aPaterno"] . " " . $fila["aMaterno"];
                            echo "<p style='color:red; font-size:16px;'>'$matricula' ¡Ya existe! <br> Pertenece a:  $nombreExistente.</p>";
                        } else {
                            // Preparar la consulta SQL para insertar el alumno
                           // Obtener el número ingresado en el formulario
                            $numero = $_POST["numero"];

                            // Preparar la consulta SQL para insertar el alumno
                            $sql = "INSERT INTO t_alumnos (numero, matricula, nombre, aPaterno, aMaterno, idgrado) VALUES ('$numero', '$matricula', '$nombre', '$aPaterno', '$aMaterno', '$idGrado')";


                            if ($conexion->query($sql) === TRUE) {
                                echo "Alumno agregado correctamente.";
                            } else {
                                echo "Error al agregar el alumno: " . $conexion->error;
                            }
                        }

                        // Cerrar conexión
                        $conexion->close();
                    }
                    ?>

                </div>
            <div class="col"></div>
        </div>

</body>
<Script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></Script>
</html>