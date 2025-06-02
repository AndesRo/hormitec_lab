<?php
// includes/footer.php
?>
<footer class="text-white pt-5" style="background-color: #003366;">
  <div class="container">
    <div class="row">
      <!-- Información de contacto -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase fw-bold" style="color: #FFC300;">Contacto</h5>
        <ul class="list-unstyled">
          <li><i class="bi bi-geo-alt-fill me-2"></i>Ruta V-505, Km 3,5
Módulo 1, Alerce, Sector La Vara, Puerto Montt</li>
          <li><i class="bi bi-telephone-fill me-2"></i>+56 2 2345 6789</li>
          <li><i class="bi bi-envelope-fill me-2"></i>Laboratorio@hormitec.cl</li>
        </ul>
      </div>

      <!-- Enlaces rápidos -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase fw-bold" style="color: #FFC300;">Enlaces Rápidos</h5>
        <ul class="list-unstyled">
          <li><a href="index.php#inicio" class="text-white text-decoration-none">Inicio</a></li>
          <li><a href="index.php#proyectos" class="text-white text-decoration-none">Proyectos</a></li>
          <li><a href="index.php#acreditaciones" class="text-white text-decoration-none">Acreditaciones</a></li>
          <li><a href="index.php#blog" class="text-white text-decoration-none">Blog</a></li>
          <li><a href="index.php#contacto" class="text-white text-decoration-none">Contacto</a></li>
        </ul>
      </div>

      <!-- Redes sociales y logo -->
      <div class="col-md-4 mb-4 text-center text-md-start">
        <h5 class="text-uppercase fw-bold" style="color: #FFC300;">Síguenos</h5>
        <div class="mb-3">
          <a href="#" class="text-white me-3 fs-4"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-3 fs-4"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="text-white fs-4"><i class="bi bi-instagram"></i></a>
        </div>

        <!-- Indicadores económicos -->
<div class="text-white mt-3" id="indicadores">
  <h6 class="fw-bold mb-2" style="color: #FFC300;">Indicadores Económicos</h6>
  <ul class="list-unstyled mb-0">
    <li><i class="bi bi-currency-dollar me-2"></i>UF: <span id="uf">Cargando...</span></li>
    <li><i class="bi bi-currency-dollar me-2"></i>UTM: <span id="utm">Cargando...</span></li>
    <li><i class="bi bi-graph-up-arrow me-2"></i>IPC: <span id="ipc">Cargando...</span></li>
  </ul>
</div>

       
      </div>
    </div>

    <hr class="border-light">

    <div class="text-center pb-3">
      <p class="mb-0">&copy; <?php echo date('Y'); ?> Hormitec. Todos los derechos reservados.</p>
    </div>
  </div>
</footer>

