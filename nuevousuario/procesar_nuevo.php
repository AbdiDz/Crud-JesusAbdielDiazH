<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menhair";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
$correo = isset($_POST['correo']) ? $_POST['correo'] : "";
$id_trabajador = isset($_POST['id_trabajador']) ? $_POST['id_trabajador'] : "";
$contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : "";

$sql = "INSERT INTO usuarioing (nombre, apellido, correo, id_trabajador,contraseña) VALUES ('$nombre', '$apellido', '$correo', '$id_trabajador', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id; 
    header("Location: Registronuevousu.php?mensaje=enviado");
        exit;
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

header("Location: Registronuevousu.php?mensaje=enviado");
exit();

$conn->close();
?>
