<form method="post" action="login.php">
    <h2 class="text-center">Iniciar sesión</h2>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Contraseña:</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
    </div>
    <p class="text-center"><a href="forgot_password.php">¿Olvidaste tu contraseña?</a></p>
    <p class="text-center">O inicia sesión con:</p>
    <div class="text-center mt-3">
    <a href="login_with_google.php" class="btn btn-danger" style="background-color: #ffffff; color: #ffffff; background-image: url('/workee/images/googlelogo.png'); background-size: contain; background-position: center; background-repeat: no-repeat; display: inline-block; width: 120px; height: 40px; text-indent: -9999px; margin-top: -10px;">
        Google
    </a>
</div>
    <form action="login_with_google.php" method="post">
</form>
</form>
