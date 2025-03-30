<?php
// Configuración de la base de datos
$host = "localhost"; // Dirección del servidor de la base de datos
$dbname = "portafolio_db"; // Nombre de la base de datos
$username = "root"; // Nombre de usuario para acceder a la base de datos
$password = ""; // Contraseña para acceder a la base de datos (vacía)

// Intentar establecer una conexión a la base de datos utilizando PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurar el modo de manejo de errores de PDO para que lance excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En caso de error, mostrar un mensaje y detener la ejecución del script
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>
