<?php
$servername = "localhost"; // Cambia si es necesario
$email = "email"; // Cambia por tu usuario de MySQL
$password = "contraseña"; // Cambia por tu contraseña de MySQL
$dbname = "registro"; // Cambia por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $email, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta a la base de datos
$sql = "SELECT id, nombre, email FROM usuarios";
$result = $conn->query($sql);

$usuarios = [];
if ($result->num_rows > 0) {
    // Guardar los resultados en un array
    while($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
} 

$conn->close();
?>