<?php
// pages/nosotros.php
?>
<section id="nosotros" class="py-5 bg-light">
  <div class="container">
    <!-- Título -->
    <h2 class="section-title text-center fw-bold mb-5"
    style="color: #003366; font-size: 2.8rem; text-transform: uppercase;
           font-family: 'Montserrat', sans-serif; 
           position: relative; padding-bottom: 10px;">
    Nosotros
    <span style="display: block; width: 80px; height: 4px; 
                 background-color: #FFC300; margin: 8px auto 0; border-radius: 2px;">
    </span>
</h2>


    <!-- Imagen de equipo y descripción -->
 <!-- Párrafo debajo del título -->
<p class="text-center fs-5 text-muted mx-auto" style="max-width: 900px;">
    En <strong>Hormitec</strong> somos un equipo multidisciplinario de profesionales especializados en el <strong>control de calidad de materiales</strong> 
          y en <strong>ingeniería civil estructural</strong>. Fundados en el sur de Chile, hemos crecido con un fuerte compromiso hacia la precisión técnica,
          el cumplimiento normativo y la confianza de nuestros clientes. Nuestra experiencia abarca laboratorios de ensayo acreditados, 
          supervisión técnica de obras y desarrollo de soluciones a medida para la industria de la construcción.
</p>

<!-- Imagen corporativa como banner de ancho completo -->
<div class="my-4">
    <img src="assets/img/cop 2.jpg" alt="Imagen Corporativa Hormitec" 
         class="img-fluid w-100 rounded shadow">
</div>



   
<!-- Hitos importantes -->
<h2 style="text-align: center; font-size: 1.5rem; font-family: 'Arial', sans-serif;"> Nuestra Innovación y Crecimiento a lo Largo de los Años</h2>
    <div class="row text-center g-4">
      <?php
      $hitos = [
  ['anio' => '2001', 'icon' => 'bi-buildings-fill',      'desc' => 'Fundación de Hormitec en Puerto Montt.'],
  ['anio' => '2006', 'icon' => 'bi-patch-check-fill',    'desc' => 'Acreditación bajo norma NCh-ISO/IEC 17025.'],
  ['anio' => '2009', 'icon' => 'bi-rocket-takeoff-fill', 'desc' => 'Lanzamiento del sistema SIHOL para gestión interna.'],
  ['anio' => '2015', 'icon' => 'bi-sliders',              'desc' => 'Modernización del laboratorio y nuevas áreas de ensayo.'],
  ['anio' => '2020', 'icon' => 'bi-diagram-3-fill',      'desc' => 'Se consolida el área de ingeniería civil estructural.'],
];


      ?>
      <?php foreach ($hitos as $hito): ?>
        <div class="col-sm-6 col-md-4 col-lg-2 mx-auto">
          <div class="p-3 bg-white rounded shadow-sm h-100">
            <div class="mb-3">
              <i class="bi <?= $hito['icon'] ?> fs-1" style="color: #FFC300;"></i>
            </div>
            <h5 class="fw-bold" style="color: #003366;"><?= htmlspecialchars($hito['anio']) ?></h5>
            <p class="text-muted"><?= htmlspecialchars($hito['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>




    <!-- Sección de imágenes de los fundadores -->
<div class="row text-center my-5">
  <div class="col-md-4">
    <img src="assets/img/fundadores/billy.jpg" alt="Fundador 1" class="img-fluid rounded shadow" style="max-height: 250px;">
    <h5 class="fw-bold mt-2" style="color: #003366;">img1</h5>
  </div>
  <div class="col-md-4">
    <img src="assets/img/fundadores/steve.jpg" alt="Fundador 2" class="img-fluid rounded shadow" style="max-height: 250px;">
    <h5 class="fw-bold mt-2" style="color: #003366;">img2</h5>
  </div>
  <div class="col-md-4">
    <img src="assets/img/fundadores/albert.jpg" alt="Fundador 3" class="img-fluid rounded shadow" style="max-height: 250px;">
    <h5 class="fw-bold mt-2" style="color: #003366;">img3</h5>
  </div>
</div>

