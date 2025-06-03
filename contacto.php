<?php
$pageTitle = 'Contáctanos';
include __DIR__ . '/../includes/header.php';
?>

<section id="contacto" class="py-5 bg-light">
  <div class="container">
    <div class="row g-5">

<h2 class="section-title text-center fw-bold mb-5"
    style="color: #003366; font-size: 2.8rem; text-transform: uppercase;
           font-family: 'Montserrat', sans-serif; 
           position: relative; padding-bottom: 10px;">
    Contacto
    <span style="display: block; width: 80px; height: 4px; 
                 background-color: #FFC300; margin: 8px auto 0; border-radius: 2px;">
    </span>
</h2>




      <!-- Formulario de contacto -->
      <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded">
          <div class="card-body">
            <h4 class="fw-bold text-primary mb-4"
                style="font-size: 2rem; font-family: 'Poppins', sans-serif;">
              <i class="bi bi-envelope-fill" style="color: #FFC300; margin-right: 8px;"></i>
              Formulario de Contacto
            </h4>
            <form action="../enviar.php" method="POST">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="nombre" class="form-label fw-bold">Nombre completo</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: Juan Pérez" required>
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label fw-bold">Correo electrónico</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Ej: correo@ejemplo.com" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="telefono" class="form-label fw-bold">Teléfono</label>
                  <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="+56 9 1234 5678" required>
                </div>
                <div class="col-md-6">
                  <label for="rut" class="form-label fw-bold">RUT</label>
                  <input type="text" name="rut" id="rut" class="form-control" placeholder="Ej: 12.345.678-9" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="solicitud" class="form-label fw-bold">Tipo de solicitud</label>
                <select name="solicitud" id="solicitud" class="form-select" required>
                  <option value="">Seleccione una opción</option>
                  <option value="Cotización">Cotización</option>
                  <option value="Reclamo">Reclamo</option>
                  <option value="Consulta">Consulta</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="mensaje" class="form-label fw-bold">Mensaje</label>
                <textarea name="mensaje" id="mensaje" rows="5" class="form-control" placeholder="Escribe tu mensaje aquí..." required></textarea>
              </div>
              <button type="submit" class="btn btn-lg text-dark w-100 fw-bold" style="background-color: #FFC300;">
                Enviar Mensaje
              </button>
            </form>
          </div>
        </div>
      </div>

 
    <!-- Información de contacto -->
<div class="col-lg-5">
  <div class="card shadow-lg border-0 rounded p-4 text-center">
    <h4 class="fw-bold text-primary mb-4"
        style="font-size: 2rem; font-family: 'Poppins', sans-serif;">
      <i class="bi bi-telephone-fill" style="color: #FFC300; margin-right: 8px;"></i>
      Información de Contacto
    </h4>
    <ul class="list-unstyled">
      <li class="mb-3">
        <i class="bi bi-envelope-fill me-2 text-warning"></i>
        <strong>Email:</strong> laboratorio@hormitec.cl
      </li>
      <li class="mb-3">
        <i class="bi bi-whatsapp me-2 text-success"></i>
        <strong>WhatsApp:</strong> <a href="https://wa.me/56989231833" class="text-dark" target="_blank">+56 9 1234 5678</a>
      </li>
      <li class="mb-3">
        <i class="bi bi-geo-alt-fill me-2 text-danger"></i>
        <strong>Dirección:</strong> Ruta V-505, Km 3,5
Módulo 1, Alerce, Sector La Vara, Puerto Montt
      </li>
    </ul>

    <!-- Logo debajo de la información de contacto -->
    <div class="mt-4">
      <img src="assets/img/mapa.png" alt="Logo Hormitec" class="img-fluid" style="max-width: 494px;">
    </div>
  </div>
</div>


<!-- Mapa como banner de ancho completo -->
<section class="py-4" style="background-color: #f8f9fa;">
  <div class="container-fluid">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2991.3036707189362!2d-72.91588160984801!3d-41.432632075375146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96183abad3bc5b6d%3A0xf8d5b007a246ed5!2sLaboratorio%20Hormitec.!5e0!3m2!1ses-419!2scl!4v1748813808038!5m2!1ses-419!2scl" 
            width="100%" height="350" 
            class="rounded shadow-sm border-0" 
            allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
