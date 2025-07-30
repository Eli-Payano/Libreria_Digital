<?php
require_once '../includes/conexion.php';
require_once '../includes/header.php';

$sql = "SELECT * FROM autores";
$stmt = $pdo->query($sql);
$autores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1 class="mb-4">Listado de Autores</h1>
<span class="badge bg-success">Total: <?= count($autores) ?> autores</span>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
            <th>País</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($autores as $autor): ?>
            <tr>
                <td><?= $autor['id_autor'] ?></td>
                <td><?= $autor['nombre'] ?></td>
                <td><?= $autor['apellido'] ?></td>
                <td><?= $autor['telefono'] ?></td>
                <td><?= $autor['ciudad'] ?></td>
                <td><?= $autor['pais'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../includes/footer.php'; ?>