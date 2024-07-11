<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo '<div class="alert alert-danger" role="alert">
                Las contraseñas no coinciden. Por favor, inténtalo de nuevo.
              </div>';
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        echo '<div class="alert alert-success" role="alert">
                Contraseña actualizada correctamente para el correo electrónico: ' . htmlspecialchars($email) . '
              </div>';
    }
}
?>