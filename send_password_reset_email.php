<?php
ini_set('SMTP', 'smtp.tu-servidor-smtp.com');
ini_set('smtp_port', 587);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(32));
    $to = $email;
    $subject = 'Recuperación de Contraseña - Tu Sitio Web';
    $message = 'Para restablecer tu contraseña, haz clic en el siguiente enlace: ' . PHP_EOL;
    $message .= 'http://tu-sitio-web.com/reset_password.php?email=' . urlencode($email) . '&token=' . urlencode($token) . PHP_EOL;
    $headers = 'From: tu-email@tu-sitio-web.com' . "\r\n" .
               'Reply-To: tu-email@tu-sitio-web.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        header('Location: forgot_password.php?status=success');
        exit;
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Ha ocurrido un error al enviar el correo electrónico. Por favor, inténtalo de nuevo más tarde.
              </div>';
    }
}
?>