<?php
// index.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hormitec</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="icon" type="image/png" href="assets/img/icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">


</head>
<body>
 <!-- Navbar -->
  <?php include("includes/navbar.php"); ?>
<section>
  <div class="position-relative" style="height: 40vh; overflow: hidden; width: 100vw;">
    <!-- Video de fondo -->
    <video autoplay muted loop class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: 1;">
      <source src="assets/video/vi_1.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>

    <!-- Contenido encima del video -->
    <div class="position-absolute w-100 text-white text-center py-3 d-flex flex-column align-items-center" style="z-index: 2;">
      <img src="assets/img/logo index.png" alt="Logo de Hormitec" class="logo-empresa mt-3">
      <a href="pages/formulario-cotizacion.html" target="_blank" class="btn btn-warning fw-bold mt-3">
  <i class="bi bi-cash-stack me-2"></i> Cotiza con Nosotros
</a>


    <!-- Botón de engranaje -->
    <button id="toggleConfig" class="btn btn-light position-absolute top-0 end-0 m-3 z-3">
      <i class="bi bi-gear-fill"></i>
    </button>

    <!-- Pestaña de configuración -->
    <div id="configPanel" class="position-absolute top-0 end-0 bg-white text-dark p-3 rounded shadow" style="display: none; z-index: 999; margin-top: 60px; margin-right: 10px;">
      <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="modeSwitch">
        <label class="form-check-label" for="modeSwitch">Modo nocturno</label>
      </div>
      <div class="d-flex justify-content-between">
        <button class="btn btn-sm btn-secondary" onclick="changeFontSize('decrease')">A-</button>
        <button class="btn btn-sm btn-secondary" onclick="changeFontSize('increase')">A+</button>
      </div>
    </div>
  </div>
</section>





  <!-- Secciones dinámicas -->
  <?php
    @include("pages/servicios-laboratorio.php");
    @include("pages/servicios-ingenieria.php");
    @include("pages/proyectos.php");
    @include("pages/acreditaciones.php");
    @include("pages/nosotros.php");
    @include("pages/blog.php");
    @include("pages/contacto.php");
  ?>

<!-- Chat interactivo de WhatsApp -->
<div id="whatsapp-chat">
  <button class="chat-toggle">
    <i class="bi bi-whatsapp"></i>
  </button>
  <div class="chat-box">
    <div class="chat-header">
      <h5>¿Necesitas ayuda?</h5>
      <button class="close-chat">&times;</button>
    </div>
    <div class="chat-body">
      <div id="chat-messages">
        <p class="bot-message">Hola 👋, ¿cómo podemos ayudarte?</p>
      </div>
      <input type="text" id="user-input" placeholder="Escribe tu mensaje..." class="form-control">
      <button class="btn btn-success mt-2" id="send-btn">Enviar</button>
      <button class="btn btn-primary mt-2" id="open-whatsapp">Abrir en WhatsApp</button>
    </div>
  </div>
</div>



  <!-- Footer -->
   <?php include("includes/footer.php"); ?>
  <!-- Bootstrap JS -->
  <script src="assets/js/clima.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
 
</body>
</html>

<script>
  ScrollReveal().reveal('.logo-cliente', {
    distance: '30px',
    origin: 'bottom',
    opacity: 0,
    interval: 100,
    duration: 800,
    easing: 'ease-in-out',
    reset: false
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    fetch("https://mindicador.cl/api")
      .then(response => response.json())
      .then(data => {
        document.getElementById("uf").textContent = "$" + data.uf.valor.toLocaleString("es-CL");
        document.getElementById("utm").textContent = "$" + data.utm.valor.toLocaleString("es-CL");
        document.getElementById("ipc").textContent = data.ipc.valor.toFixed(2) + " %";
      })
      .catch(error => {
        console.error("Error al obtener los indicadores:", error);
        document.getElementById("uf").textContent = "No disponible";
        document.getElementById("utm").textContent = "No disponible";
        document.getElementById("ipc").textContent = "No disponible";
      });
  });
</script>


</body>
</html>

</html>
