<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">     <!-- Enlace al archivo CSS para restablecer estilos predeterminados -->
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">     <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Contacto</title>
</head>
<body>
    <div class="container mt-5">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require_once 'db_config.php';

            // Recibir datos del formulario
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $mensaje = $_POST['mensaje'];

            // Validar datos
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='alert alert-danger' role='alert'>
                        El correo electrónico no es válido.
                      </div>";
                exit;
            }

            if (!preg_match('/^\d{9}$/', $telefono)) {
                echo "<div class='alert alert-danger' role='alert'>
                        El número de teléfono debe tener 9 dígitos.
                      </div>";
                exit;
            }

            // Insertar datos en la base de datos
            $query = "INSERT INTO contactos (nombre, correo, telefono, mensaje) VALUES (:nombre, :correo, :telefono, :mensaje)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                ':nombre' => $nombre,
                ':correo' => $correo,
                ':telefono' => $telefono,
                ':mensaje' => $mensaje
            ]);

            // Mostrar mensaje de éxito usando bootstrap
            echo "
            <div class='alert alert-success text-center' role='alert'>
                <h4 class='alert-heading'>¡Hola <strong>$nombre</strong>!</h4>
                <p>Gracias por contactarme. Me pondré en contacto contigo por medio del teléfono <strong>$telefono</strong>.</p>
                <hr>
                <p class='mb-0'><a href='index.php' class='btn btn-primary'>Volver al inicio</a></p>
            </div>
            ";
        } else {
            echo "<div class='alert alert-warning' role='alert'>
                    No se enviaron datos.
                  </div>";
        }
        ?>
    </div>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>
