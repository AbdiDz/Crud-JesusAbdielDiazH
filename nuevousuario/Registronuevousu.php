
<!doctype html>
<html lang="es" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Registro Nuevo Usuario</title>
    <link href="favicon_package/favicon-32x32.png" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!--/////////////////////////////////////estilo interfaz//////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
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
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <link href="headers.css" rel="stylesheet">
    <link href="features.css" rel="stylesheet">
  </head>
  <body>

    <div class="alert alert-primary text-center">
  <strong>¡Advertencia!</strong> Maneje con cuidado los datos del servicio de Administración
</div>
  </header>
</main>

    
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menhair";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarioing ORDER BY id_usuario DESC";
$result = $conn->query($sql);

if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'enviado') {
  echo '<div class="container mt-4"><div class="alert alert-success" role="alert">"El registro se ha guardado correctamente."</div></div>';
  echo '<script>setTimeout(function(){ document.querySelector(".alert-success").style.display = "none"; }, 10000);</script>';
}else if (isset($_GET['mensaje'])) {
  $mensaje = $_GET['mensaje'];
  echo '<div class="container mt-4"><div class="alert alert-success" role="alert">' . $mensaje . '</div></div>';
  echo '<script>setTimeout(function(){ document.querySelector(".alert-success").style.display = "none"; }, 10000);</script>';
}

?>

<main>
  <div class="container">
    <div class="py-5 text-center">
            <h2>Registro de Nuevo Usuario</h2>
          </div>

    <div class="row justify-content-center">
      <div class="col-md-7">
        <h4 class="mb-3">Ingresar datos</h4>
        <form method="POST" action="procesar_nuevo.php">

          <div class="row g-3">
            <div class="col-12">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere un nombre válido.
              </div>
            </div>

            <div class="col-12">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" class="form-control" name="apellido" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere un dato válido.
              </div>
            </div>

            <div class="col-12">
              <label for="correo" class="form-label">Correo</label>
              <input type="text" class="form-control" name="correo" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere un monto válido.
              </div>
            </div>

            <div class="col-12">
              <label for="id_trabajador" class="form-label">Identificacion del trabajador</label>
              <input type="text" class="form-control" name="id_trabajador" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere un monto válido.
              </div>
            </div>
            

            <div class="col-12">
              <label for="Contraseña" class="form-label">Contraseña</label>
              <input typo="password"class="form-control" name="contraseña" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere una contraseña  válida.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div>
            <button class="w-100 btn btn-dark" type="submit" name="mensaje" value="Guardar Registro">
              Guardar Registro
</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <br>
  <div class="b-example-divider"></div>
  <br>
  <div class="container">
    <h1>Registro Nuevo Administrador</h1>
    <a href="Registronuevousu.php" class="btn btn-success btn-sm"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus-fill" viewBox="0 0 16 16">
  <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm4.5 6V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5a.5.5 0 0 1 1 0Z"/>
</svg> Agregar Nuevo Registro</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Identificacion trabajador</th>
          <th>Contraseña</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_usuario"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["apellido"] . "</td>";
            echo "<td>" . $row["correo"] . "</td>";
            echo "<td>" . $row["id_trabajador"] . "</td>";
            echo "<td>" . $row["contraseña"] . "</td>";
            echo '<td>
                    <a href="editar_nuevo.php?id=' . $row["id_usuario"] . '" class="btn btn-dark btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg> Editar</a>
                    <a href="eliminar_nuevo.php?id=' . $row["id_usuario"] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'¿Está seguro de que desea eliminar este registro?\')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                  </svg> Eliminar</a>
                  </td>';
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='6'>No se encontraron registros en la base de datos.</td></tr>";
        }
        ?>
      </tbody>
    </table>

    <div class="text-center mt-4">
      <a href="exportar_listadeAdmin.php" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-down" viewBox="0 0 16 16">
  <path d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.708l-.646.647V10.5a.5.5 0 0 0-1 0v2.793l-.646-.647a.5.5 0 0 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0Z"/>
  <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z"/>
</svg>  Exportar Registros de Tabla</a>
    </div>
  </div>
</main>

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

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="form-validation.js"></script>
    </body>
</html>