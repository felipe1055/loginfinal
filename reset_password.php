<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Restablecer Contraseña</div>
                    <div class="card-body">
                        <form action="reset_password_process.php" method="post">
                            <div class="form-group">
                                <label for="password">Nueva Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirmar Contraseña</label>
                                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                            </div>
                            <input type="hidden" name="email" value="<?php echo htmlspecialchars($_GET['email']); ?>">
                            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
                            <button type="submit" class="btn btn-primary">Restablecer Contraseña</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>