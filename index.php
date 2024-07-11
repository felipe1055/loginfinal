<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    $username = $_SESSION['username'];
    unset($_SESSION['logged_in'], $_SESSION['username']);
    echo "<script>var showWelcomeModal = true;</script>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema ABM con Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Bahnschrift', Arial, sans-serif; /* Aplica la fuente Bahnschrift */
        }
        .header-logo {
            max-width: 200px; /* ajusta el tamaño máximo de la imagen del encabezado */
        }
        .header-line {
            height: 3px; /* altura de la línea decorativa */
            background-color: blue; /* color de la línea decorativa */
        }
    </style>
</head>
<body>

<div class="container text-center mt-3">
    <img src="/Workee/images/workee.png" class="header-logo img-fluid" alt="Imagen de encabezado">
    <div class="header-line w-100"></div> <!-- línea decorativa extendida al ancho completo -->
</div>

<div class="container">
    <div id="welcomeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bienvenido <?php echo isset($username) ? htmlspecialchars($username) : ''; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¡Gracias por iniciar sesión!</p>
                </div>
            </div>
        </div>
    </div>

    <div id="registroExitosoModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro Exitoso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¡El usuario se ha registrado correctamente!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <?php include('login_form.php'); ?>
        </div>
        <div class="col-md-6">
            <?php include('register_form.php'); ?>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        if (typeof showWelcomeModal !== 'undefined' && showWelcomeModal) {
            $('#welcomeModal').modal('show');
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
