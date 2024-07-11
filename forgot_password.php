<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Recuperar Contraseña</h2>
                <form action="change_password.php" method="post">
                    <div class="form-group">
                        <label for="email">Selecciona tu correo electrónico:</label>
                        <select class="form-control" id="email" name="email" required>
                            <?php
                            $host = 'localhost';
                            $username = 'root';
                            $password = '1234';
                            $database = 'sistema_abm';

                            $conn = new mysqli($host, $username, $password, $database);

                            if ($conn->connect_error) {
                                die("Conexión fallida: " . $conn->connect_error);
                            }

                            $sql = "SELECT email FROM usuarios";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<option value="' . $row['email'] . '">' . $row['email'] . '</option>';
                                }
                            } else {
                                echo '<option value="">No hay correos electrónicos disponibles</option>';
                            }

                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Seleccionar Correo Electrónico</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>