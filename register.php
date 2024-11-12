<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $career = $_POST['career'];

    $stmt = $pdo->prepare("INSERT INTO users (username, password, career) VALUES (?, ?, ?)");
    if ($stmt->execute([$username, $password, $career])) {
        // Redirigir a la página de inicio de sesión después de un registro exitoso
        header("Location: login.php");
        exit(); // Asegúrate de llamar a exit() después de header()
    } else {
        echo "Error en el registro.";
    }
}
?>