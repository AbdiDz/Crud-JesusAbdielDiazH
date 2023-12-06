<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menhair";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$correo = isset($_POST['correo']) ? $_POST['correo'] : "";
$asunto = isset($_POST['asunto']) ? $_POST['asunto'] : "";
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";


if (!empty($nombre) && !empty($correo) && !empty($asunto) && !empty($mensaje)) {
    $sql = "INSERT INTO comentarios (nombre, correo, asunto, mensaje) VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id; 

        $_SESSION['comentario_enviado'] = true;

        
        header("Location: index.html");
        exit();
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }
} else {
    $_SESSION['comentario_incompleto'] = true;

    
    header("Location: index.html");
    exit();
}

$conn->close();
?>
