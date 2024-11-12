<?php
$host = 'localhost'; // Cambia si es necesario
$db = 'registro'; // Tu base de datos
$user = 'usuario'; // Tu usuario de MySQL
$pass = 'contraseña'; // Tu contraseña de MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>