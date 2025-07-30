<?php require_once '../includes/header.php'; ?>

<h1 class="mb-4">Formulario de Contacto</h1>

<form action="../contacto_form.php" method="post">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required>
  </div>
  <div class="mb-3">
    <label for="correo" class="form-label">Correo:</label>
    <input type="email" class="form-control" id="correo" name="correo" required>
  </div>
  <div class="mb-3">
    <label for="asunto" class="form-label">Asunto:</label>
    <input type="text" class="form-control" id="asunto" name="asunto" required>
  </div>
  <div class="mb-3">
    <label for="comentario" class="form-label">Comentario:</label>
    <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>

  <script>
  document.querySelector("form").addEventListener("submit", function(e) {
    let nombre = document.getElementById("nombre").value.trim();
    let correo = document.getElementById("correo").value.trim();
    let asunto = document.getElementById("asunto").value.trim();
    let comentario = document.getElementById("comentario").value.trim();

    if (!nombre || !correo || !asunto || !comentario) {
      alert("Por favor, completa todos los campos del formulario.");
      e.preventDefault(); // detiene el envío del formulario
    }
  });
</script>

</form>

<?php require_once '../includes/footer.php'; ?>
