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

if ($result->num_rows > 0) {

    $archivo = "exportacion_usuariosAdmin.txt";

    $file = fopen($archivo, "w");


    fwrite($file, "ID\tNombre\tApellido\tCorreo\tIdentificacion trabajador\tContraseña\n");


    while ($row = $result->fetch_assoc()) {
        $linea = $row["id_usuario"] . "\t" . $row["nombre"] . "\t" . $row["apellido"] . "\t" . $row["correo"] . "\t" . $row["id_trabajador"] . "\t" . $row["contraseña"] .  "\n";
        fwrite($file, $linea);
    }

    fclose($file);

    header("Content-Disposition: attachment; filename=\"" . $archivo . "\"");
    header("Content-Type: application/octet-stream");
    header("Content-Length: " . filesize($archivo));
    readfile($archivo);

    unlink($archivo);
} else {
    echo "No se encontraron registros en la base de datos.";
}

$conn->close();
?>
