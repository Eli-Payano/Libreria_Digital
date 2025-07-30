<?php
$host = 'sql112.byethost7.com';
$db   = 'b7_39597694_libreria';
$username = 'b7_39597694';
$pass = 'pwebc5';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $username, $pass);  // Aquí está la clave: usar $username
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa"; // Para debug
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit();
}
?>
