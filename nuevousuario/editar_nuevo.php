<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menhair";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST["id_usuario"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $id_trabajador = $_POST["id_trabajador"];
    $contraseña = $_POST["contraseña"];

    $sql = "UPDATE usuarioing SET nombre='$nombre', apellido='$apellido', correo='$correo', id_trabajador='$id_trabajador' , contraseña='$contraseña' WHERE id_usuario='$id_usuario'";

    if ($conn->query($sql) === TRUE) {
        $mensaje="Los datos se han actualizado correctamente.";
        header("Location: Registronuevousu.php?mensaje=" . urlencode($mensaje));
        
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
   
    <title>Editar Usuario</title>
    <link href="favicon_package/favicon-32x32.png" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
      font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

     .b-example-vr {
       flex-shrink: 0;
       width: 1.5rem;
       height: 100vh;
     }

     .bi {
       vertical-align: -.125em;
       fill: currentColor;
     }

     .nav-scroller {
       position: relative;
       z-index: 2;
       height: 2.75rem;
       overflow-y: hidden;
     }

     .nav-scroller .nav {
       display: flex;
       flex-wrap: nowrap;
       padding-bottom: 1rem;
       margin-top: -1px;
       overflow-x: auto;
       text-align: center;
       white-space: nowrap;
       -webkit-overflow-scrolling: touch;
     }

     .btn-bd-primary {
       --bd-violet-bg: #712cf9;
       --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

       --bs-btn-font-weight: 600;
       --bs-btn-color: var(--bs-white);
       --bs-btn-bg: var(--bd-violet-bg);
       --bs-btn-border-color: var(--bd-violet-bg);
       --bs-btn-hover-color: var(--bs-white);
       --bs-btn-hover-bg: #6528e0;
       --bs-btn-hover-border-color: #6528e0;
       --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
       --bs-btn-active-color: var(--bs-btn-hover-color);
       --bs-btn-active-bg: #5a23c8;
       --bs-btn-active-border-color: #5a23c8;
     }
     .bd-mode-toggle {
       z-index: 1500;
     }
   </style>
</head>
<body>
 
    <div class="alert alert-primary text-center">
  <strong>¡Advertencia!</strong> Maneje con cuidado los datos del servicio de Administración
</div>
  </header>
</main>

    <main>
        <div class="container">
            <div class="py-5 text-center">
                <h2>Editar usuario</h2>
                <p class="lead">Utiliza este apartado para editar usuarios</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h4 class="mb-3">Editar datos</h4>

                    <?php

$id_usuario = isset($_GET["id"]) ? $_GET["id"] : "";
$sql = "SELECT * FROM usuarioing WHERE id_usuario='$id_usuario'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $nombre = $row["nombre"];
    $apellido = $row["apellido"];
    $correo = $row["correo"];
    $id_trabajador = $row["id_trabajador"];
    $contraseña = $row["contraseña"];

} else {
    echo "No se encontró el registro en la base de datos.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $id_producto = $_POST["id_producto"];
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $correo = $_POST["correo"];
  $id_trabajador = $_POST["id_trabajador"];
  $contraseña = $_POST["contraseña"];


    $stmt = $conn->prepare("UPDATE usuarioing SET nombre=?, apellido=?, correo=?, id_trabajador=?, contraseña=? WHERE id_usuario=?");
    $stmt->bind_param("sssssi", $nombre, $apellido, $correo, $id_trabajador, $correo, $id_usuario);

    if ($stmt->execute()) {
        $mensaje = "Los datos se han actualizado correctamente.";
        header("Location: Registronuevousu.php?mensaje=" . urlencode($mensaje));
        exit;
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}
?>


                    <form method="POST" action="editar_nuevo.php">
                    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" required>
                                <div class="invalid-feedback">
                                    Se requiere un nombre válido.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellido" value="<?php echo $apellido; ?>"  required>
                                <div class="invalid-feedback">
                                    Se requiere un dato válido.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="text" class="form-control" name="correo" value="<?php echo $correo; ?>" required>
                                <div class="invalid-feedback">
                                    Se requiere un correo válido.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="id_trabajador" class="form-label">Identificacion trabajador</label>
                                <input type="text"class="form-control" name="id_trabajador" value="<?php echo $id_trabajador; ?>" required>
                                <div class="invalid-feedback">
                                    Se requiere una Identificacion válida.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="contraseña" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="contraseña" value="<?php echo $contraseña; ?>" required>
                                <div class="invalid-feedback">
                                    Se requiere una contraseña válida.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">
                        <div>
                            <input class="w-100 btn btn-dark btn-lg" type="submit" name="mensaje" value="Guardar Cambios">
                        </div>
                </div>
        </div>
        </div>
        <?php
        $conn->close();
        ?>
            <footer class="my-5 pt-5 text-muted text-center text-small">
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad</a></li>
      <li class="list-inline-item"><a href="#">Terminos y condiciones</a></li>
      <li class="list-inline-item"><a href="#">Soporte Tecnico</a></li>
    </ul>
  </footer>
        </div>
    </main>
</body>
</html>