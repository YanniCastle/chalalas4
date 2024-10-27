<?php
$host = "localhost";
$dbname = "nombre_base_datos";
$username = "tu_usuario";
$password = "tu_contraseña";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, email FROM usuarios";
$result = $conn->query($sql);

$usuarios = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}

echo json_encode($usuarios);
$conn->close();
?>


IMPLEMENTAR EN build.gradle:
//implementation 'com.android.volley:volley:1.2.1'
