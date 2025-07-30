<?php
require_once '../includes/conexion.php';
require_once '../includes/header.php';

$sql = "SELECT * FROM titulos";
$stmt = $pdo->query($sql);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1 class="mb-4">Listado de Libros</h1>
<span class="badge bg-primary">Total: <?= count($libros) ?> libros</span>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Título</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Total Ventas</th>
            <th>Fecha de Publicación</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($libros as $libro): ?>
            <tr>
                <td><?= htmlspecialchars($libro['titulo']) ?></td>
                <td><?= htmlspecialchars($libro['tipo']) ?></td>
                <td><?= htmlspecialchars($libro['precio']) ?> USD</td>
                <td><?= htmlspecialchars($libro['total_ventas']) ?></td>
                <td><?= date('d-m-Y', strtotime($libro['fecha_pub'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../includes/footer.php'; ?>
