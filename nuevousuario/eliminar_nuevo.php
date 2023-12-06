<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menhair";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "DELETE FROM usuarioing WHERE id_usuario = $id";

    if ($conn->query($sql) === TRUE) {
        $message = "Registro eliminado satisfactoriamente.";
        header("Location: Registronuevousu.php?mensaje=" . urlencode($message));
        exit();
    } else {
        $message = "Error al eliminar el registro: " . $conn->error;
        header("Location: Registronuevousu.php?mensaje=" . urlencode($message));
        exit();
    }
}

$conn->close();
?>
