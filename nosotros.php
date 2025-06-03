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
<h2 style="text-align: center; font-size: 1.5rem; font-family: 'Arial', sans-serif;"> </h2>
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


<!-- Sección de equipo directivo -->
<section class="container my-5">
  <h2 class="text-center fw-bold mb-4" style="color: #003366;">Equipo Directivo y Técnico de HORMITEC</h2>
  <p class="text-center text-muted mb-5">Conformado por profesionales de excelencia en ingeniería, calidad y gestión operativa.</p>

  <div class="row text-center g-4">
    <div class="col-md-4">
      <img src="assets/img/fundadores/men1.jpg" alt="Jorge Marcos Vera" class="img-fluid rounded shadow" style="max-height: 250px;">
      <h5 class="fw-bold mt-3" style="color: #003366;">Jorge Marcos Vera</h5>
      <p class="text-muted mb-0">Gerente General</p>
      <p class="text-muted">Ingeniero Civil – Ms Geotecnia y Cimentaciones</p>
    </div>
    <div class="col-md-4">
      <img src="assets/img/fundadores/feme1.jpg" alt="Carmen Chávez Tike" class="img-fluid rounded shadow" style="max-height: 250px;">
      <h5 class="fw-bold mt-3" style="color: #003366;">Carmen Chávez Tike</h5>
      <p class="text-muted mb-0">Gerente de Administración y Finanzas</p>
      <p class="text-muted">Especialista en Gestión Financiera</p>
    </div>
    <div class="col-md-4">
      <img src="assets/img/fundadores/men2.jpg" alt="Sergio Olavarría Bastidas" class="img-fluid rounded shadow" style="max-height: 250px;">
      <h5 class="fw-bold mt-3" style="color: #003366;">Sergio Olavarría Bastidas</h5>
      <p class="text-muted mb-0">Gerente Técnico – Gerente de Calidad</p>
      <p class="text-muted">Ingeniero Civil / Constructor Civil</p>
    </div>
    <div class="col-md-6">
      <img src="assets/img/fundadores/men3.jpg" alt="Francisco Millar Schultheiss" class="img-fluid rounded shadow" style="max-height: 250px;">
      <h5 class="fw-bold mt-3" style="color: #003366;">Francisco Millar Schultheiss</h5>
      <p class="text-muted mb-0">Jefe de Operaciones</p>
      <p class="text-muted">Laboratorista Vial Clase C</p>
    </div>
    <div class="col-md-6">
      <img src="assets/img/fundadores/feme2.jpg" alt="Marianne Gutiérrez" class="img-fluid rounded shadow" style="max-height: 250px;">
      <h5 class="fw-bold mt-3" style="color: #003366;">Marianne Gutiérrez</h5>
      <p class="text-muted mb-0">Jefa de Calidad</p>
      <p class="text-muted">Ingeniera Civil</p>
    </div>
  </div>
</section>

