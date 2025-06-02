<?php
// pages/servicios-ingenieria.php
?>
<section id="ingenieria" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center gy-4">
      
      <!-- Imagen ilustrativa -->
      <div class="col-lg-6 order-lg-2">
        <img src="assets/img/inge.jpg" alt="Hormitec Ingeniería" class="img-fluid rounded shadow" style="max-height: 400px; object-fit: cover; width: 100%;">
      </div>
      
      <!-- Texto + logo -->
      <div class="col-lg-6 order-lg-1">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between">
          
          <!-- Texto -->
          <div class="flex-grow-1">
            <h2 class="section-title fw-bold" style="color: #003366;">Hormitec Ingeniería</h2>
            <p class="lead text-muted">
              En Hormitec Ingeniería nos especializamos en brindar soluciones técnicas integrales para proyectos de construcción, con énfasis en el control de calidad, cumplimiento normativo y respaldo técnico en terreno. Nuestro equipo de profesionales y técnicos trabaja junto al cliente para asegurar que cada proyecto cumpla con los más altos estándares exigidos por la normativa nacional e internacional.
            </p>
            <ul class="list-unstyled mb-4">
              <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #FFC300;"></i>Elaboración de informes exigidos por organismos públicos y privados.</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #FFC300;"></i>Informes de ensayos con respaldo de laboratorio acreditado.</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #FFC300;"></i>Toma y seguimiento de muestras en obra.</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #FFC300;"></i>Evaluación de materiales: suelos, áridos, hormigón.</li>
            </ul>
            <a href="pages/servicios-ingenieria-detalle.php" class="btn btn-warning fw-bold" style="background-color: #FFC300; color: #000;">
              Más información
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
<section class="py-5">
  <div class="container">
    <h3 class="text-center fw-bold mb-5"
    style="color: #003366; font-size: 2.5rem; text-transform: uppercase;
           font-family: 'Poppins', sans-serif; position: relative; padding-bottom: 12px;">
    <i class="bi bi-people-fill" style="color: #FFC300; margin-right: 8px;"></i>
    Nuestros Clientes
    <span style="display: block; width: 120px; height: 5px; 
                 background: linear-gradient(to right, #003366, #FFC300);
                 margin: 10px auto 0; border-radius: 3px;">
    </span>
</h3>


    <div id="carouselClientes" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false" data-bs-interval="7000">

      <div class="carousel-inner">
        <?php
          $clientes = [
            ['logo' => 'logo-ararat.jpg', 'alt' => 'Ministerio de Obras Públicas'],
            ['logo' => 'logo-avifel.jpg', 'alt' => 'SERVIU'],
            ['logo' => 'logo-axis.jpg', 'alt' => 'Dirección de Vialidad'],
            ['logo' => 'logo-baquedano.jpg', 'alt' => 'Constructora del Sur'],
            ['logo' => 'logo-capreva.jpg', 'alt' => 'Municipalidad de Puerto Montt'],
            ['logo' => 'logo-cosal.jpg', 'alt' => 'Municipalidad de Puerto Montt'],
            ['logo' => 'logo-ebcosur.jpg', 'alt' => 'Cámara Chilena de la Construcción'],
            ['logo' => 'logo-enco.jpg', 'alt' => 'Constructora COPSA'],
            ['logo' => 'logo-galilea.jpg', 'alt' => 'Constructora Hormitec'],
            ['logo' => 'logo-harcha.jpg', 'alt' => 'Constructora Hormitec 2'],
            ['logo' => 'logo-ingevec.jpg', 'alt' => 'Constructora Hormitec 3'],
            ['logo' => 'logo-inmaferspa.jpg', 'alt' => 'Constructora Hormitec 4']
          ];

          $chunks = array_chunk($clientes, 3);

          foreach ($chunks as $index => $grupo): ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
              <div class="row justify-content-center align-items-center">
                <?php foreach ($grupo as $c): ?>
                  <div class="col-md-4 d-flex justify-content-center mb-4">
                    <img src="assets/img/clientes/<?= $c['logo'] ?>"
                         alt="<?= htmlspecialchars($c['alt']) ?>"
                         class="img-fluid grayscale-hover shadow-lg logo-cliente"
                         style="max-height: 150px; transition: transform 0.3s ease;">
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
        <?php endforeach; ?>
      </div>

      <!-- Indicadores del carrusel -->
      <div class="carousel-indicators">
        <?php foreach ($chunks as $index => $grupo): ?>
          <button type="button" data-bs-target="#carouselClientes"
                  data-bs-slide-to="<?= $index ?>"
                  class="<?= $index === 0 ? 'active' : '' ?>"
                  aria-label="Slide <?= $index + 1 ?>"></button>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


</section>
