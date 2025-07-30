<?php
require_once 'includes/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Limpiamos y validamos los datos
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $asunto = trim($_POST['asunto']);
    $comentario = trim($_POST['comentario']);
    $fecha = date('Y-m-d H:i:s');

    // Validamos que todos los campos tengan algo
    if ($nombre && $correo && $asunto && $comentario) {
        $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario)
                VALUES (:fecha, :correo, :nombre, :asunto, :comentario)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':fecha' => $fecha,
            ':correo' => $correo,
            ':nombre' => $nombre,
            ':asunto' => $asunto,
            ':comentario' => $comentario
        ]);

        echo "<script>alert('Formulario enviado exitosamente');window.location.href='pages/contacto.php';</script>";
    } else {
        echo "<script>alert('Por favor, completa todos los campos');window.location.href='pages/contacto.php';</script>";
    }
}
?>

