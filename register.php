<?php
session_start();
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
$_SESSION['registro_exitoso'] = true;
?>
