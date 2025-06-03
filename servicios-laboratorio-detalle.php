<?php
// pages/servicios-ingenieria-detalle.php
$pageTitle = 'Hormitec laboratorio';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>


<main>

<!-- Hero interno -->
<section class="py-5 text-white" style="background-color: #003366;">
  <div class="container text-center">
    <h1 class="display-5 fw-bold">Hormitec Laboratorio</h1>
    <p class="lead fw-bold" style="color: #FFC300;">Control técnico, ensayos certificados y respaldo normativo para la construcción</p>
  </div>
</section>



<!-- Detalle de servicios -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center gy-5">
      <!-- Imagen principal -->
      <div class="col-lg-6">
        <img src="../assets/img/hormitec-laboratorio.jpg" alt="Laboratorio Hormitec" class="img-fluid rounded shadow-sm">
      </div>
      <!-- Texto descriptivo -->
      <div class="col-lg-6">
        <h2 class="fw-bold" style="color: #003366;">Nuestros Servicios Especializados</h2>
        <p class="text-muted mb-4">
          En <strong>Hormitec Laboratorio</strong> contamos con instalaciones equipadas, personal calificado y acreditación bajo la norma <strong>NCh-ISO/IEC 17025</strong>. 
          Ofrecemos servicios técnicos de control de calidad para proyectos de construcción, cumpliendo con estándares nacionales e internacionales.
        </p>
        <ul class="list-unstyled mb-4">
          <li class="mb-2">
            <i class="bi bi-check-circle-fill me-2" style="color: #FFC300;"></i>
            Ensayos de compresión de hormigón hasta 2000 kN (cilíndricos y cúbicos)
          </li>
          <li class="mb-2">
            <i class="bi bi-check-circle-fill me-2" style="color: #FFC300;"></i>
            Tracción por flexión, hendimiento y módulo de elasticidad
          </li>
          <li class="mb-2">
            <i class="bi bi-check-circle-fill me-2" style="color: #FFC300;"></i>
            Ensayos granulométricos y propiedades físicas de áridos
          </li>
          <li class="mb-2">
            <i class="bi bi-check-circle-fill me-2" style="color: #FFC300;"></i>
            Ensayos de suelos: Proctor, CBR, densidad in situ y límites de Atterberg
          </li>
          <li class="mb-2">
            <i class="bi bi-check-circle-fill me-2" style="color: #FFC300;"></i>
            Determinaciones de absorción, humedad y densidades reales/aparentes
          </li>
        </ul>
 <a href="formulario-cotizacion.html" target="_blank" class="btn btn-warning fw-bold" style="background-color: #FFC300; color: #000;">
  Solicitar Cotización Aqui
</a>



      </div>
    </div>
  </div>
</section>

<!-- Sección de Información Técnica -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-4" style="color: #003366;">Desde el año 2006 el laboratorio se encuentra acreditado en la norma NCh17025, en las áreas de hormigones, áridos para hormigones y suelos.</h2>
    <div class="row g-4 text-center">
      <!-- Primer Contenedor -->
      <div class="col-md-6">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <h5 class="fw-bold" style="color: #003366;">Construcción – Mecánica de Suelos (LE 546)</h5>
          <p class="text-muted">Detalles sobre nuestros procedimientos y normas.</p>
          <a href="#" data-bs-toggle="modal" data-bs-target="#modalInfo1" class="btn btn-primary">Ver más</a>
        </div>
      </div>
      <!-- Segundo Contenedor -->
      <div class="col-md-6">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <h5 class="fw-bold" style="color: #003366;">Hormigón y Mortero (LE 547)</h5>
          <p class="text-muted">Consulta nuestra documentación sobre certificaciones.</p>
          <a href="#" data-bs-toggle="modal" data-bs-target="#modalInfo2" class="btn btn-primary">Ver más</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modales -->
<div class="modal fade" id="modalInfo1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #003366;">
        <h5 class="modal-title text-white">Obras de Pavimentación, según convenio INN-Minvu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <ul class="fs-6">
          <li><strong>NCh1516.Of79:</strong> Determinación de la densidad en el terreno mediante el método del cono de arena.</li>
          <li><strong>MC V8 8.102.1 / Junio 2022:</strong> Ensayo de granulometría para evaluar la distribución de partículas en agregados.</li>
          <li><strong>NCh1534/2.Of79:</strong> Ensayo de compactación utilizando el método Proctor modificado.</li>
          <li><strong>NCh1532.Of80:</strong> Medición de la densidad de partículas sólidas para la caracterización de suelos.</li>
          <li><strong>NCh1517/1.Of79:</strong> Determinación del límite líquido, esencial en la clasificación de suelos según su plasticidad.</li>
          <li><strong>NCh1517/2.Of79:</strong> Evaluación del límite plástico, fundamental en el comportamiento mecánico de los suelos.</li>
          <li><strong>NCh1852.Of81:</strong> Ensayo de razón de soporte de suelos compactados en laboratorio.</li>
          <li><strong>ASTM D4253-16e1:</strong> Determinación de la densidad máxima de suelos y agregados.</li>
          <li><strong>ASTM D4254-16:</strong> Medición de la densidad mínima para el análisis de estabilidad y compactación de materiales.</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalInfo2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #003366;">
        <h5 class="modal-title text-white">Hormigón, según convenio INN-Minvu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p class="fs-5"><ul>
  <li><strong>NCh170-2016:</strong> Hormigón - Requisitos Generales.</li>
  <li><strong>NCh171-2008:</strong> Extracción de muestra del hormigón fresco.</li>
  <li><strong>NCh1019.Of2009:</strong> Docilidad - Método de asentamiento del Cono de Abrams.</li>
  <li><strong>NCh1017:2009:</strong> Confección en obra y curado de probetas para ensayos de compresión, tracción por flexión y hendimiento.</li>
  <li><strong>NCh1564.Of2009:</strong> Densidad aparente.</li>
  <li><strong>NCh1171/1:2012:</strong> Extracción, preparación y ensayo de testigos.</li>
  <li><strong>NCh1037:2009:</strong> Compresión de probetas cúbicas y cilíndricas.</li>
  <li><strong>NCh1038:2009:</strong> Tracción por flexión.</li>
  <li><strong>NCh1170:2012:</strong> Tracción por hendimiento.</li>
  <li><strong>NCh1172.Of2010 / Cláusula 5 y 6, Procedimiento A y B:</strong> Rectificado y refrentado de probetas, con pasta de azufre.</li>
</ul>

<h3>Áridos para Hormigón, según convenio INN-Minvu</h3>
<ul>
  <li><strong>NCh164:2009:</strong> Extracción y preparación de muestras.</li>
  <li><strong>NCh165.Of2009:</strong> Análisis granulométrico.</li>
  <li><strong>NCh1223.Of77:</strong> Determinación del material fino menor a 0,080 mm.</li>
  <li><strong>NCh1117.Of2010:</strong> Determinación de las densidades reales y neta y de la absorción de agua de las gravas.</li>
  <li><strong>MC V8 8.202.6 / Junio 2022:</strong> Cubicidad de partículas.</li>
  <li><strong>NCh1116:2008:</strong> Densidad aparente.</li>
  <li><strong>NCh1239:2009:</strong> Determinación de las densidades reales y neta y de la absorción de agua de las arenas.</li>
  <li><strong>NCh1369:2010:</strong> Desgaste de las gravas.</li>
  <li><strong>NCh1511.Of80:</strong> Coeficiente volumétrico medio de las gravas.</li>
  <li><strong>NCh166.Of2009:</strong> Impurezas orgánicas.</li>
  <li><strong>NCh1325:2010:</strong> Equivalente de arena.</li>
  <li><strong>NCh1327.Of77:</strong> Determinación de partículas desmenuzables.</li>
  <li><strong>NCh1326:2012:</strong> Determinación de huecos.</li>
</ul>
</p>
      </div>
    </div>
  </div>
</div>




  <!-- Áreas de Ensayo -->
<section class="py-5 bg-light">
  <div class="container">
    <h3 class="mb-4 fw-bold" style="color: #003366;">Áreas de Ensayo</h3>
    <div class="row g-4 text-center">
      <?php
        $areas = [
          ['icon' => 'bi-bar-chart-line-fill', 'nombre' => 'Ensayos en Áridos',     'desc' => 'Granulometría, impurezas orgánicas, densidad, desgaste y más.'],
          ['icon' => 'bi-globe2',              'nombre' => 'Ensayos en Suelos',     'desc' => 'CBR, humedad, límites Atterberg, compactación Proctor.'],
          ['icon' => 'bi-building',            'nombre' => 'Ensayos en Hormigón',   'desc' => 'Resistencia, tracción, docilidad y preparación de probetas.'],
          ['icon' => 'bi-file-earmark-check',  'nombre' => 'Informes Certificados', 'desc' => 'Resultados válidos y trazables según norma NCh-ISO/IEC 17025.'],
        ];
      ?>
      <?php foreach ($areas as $a): ?>
        <div class="col-sm-6 col-md-3">
          <div class="p-4 bg-white rounded shadow-sm h-100">
            <i class="bi <?= $a['icon'] ?> fs-1 mb-3" style="color: #FFC300;"></i>
            <h5 class="fw-bold" style="color: #003366;"><?= htmlspecialchars($a['nombre']) ?></h5>
            <p class="text-muted"><?= htmlspecialchars($a['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Equipamiento del Laboratorio -->
<section class="py-5">
  <div class="container">
    <h3 class="mb-4 text-center fw-bold" style="color: #003366;">Equipamiento del Laboratorio</h3>
    <div class="row g-3">
      <?php
        $equipos_lab = ['imagen1.jpg', 'imagen2.jpg', 'imagen3.jpg', 'muestrapresion.jpg'];
        $nombres = ['Equipo de corte directo', 'Gata CBR', 'Moldes Cilindricos', 'Prensa de ensayo'];
        $descripciones = [
          'Equipo de corte directo para suelos, bajo condiciones consolidadas de drenaje.',
          'Se utiliza para el ensayo de capacidad de soporte de suelo.',
          'Se usan para la confeccion de probetas de hormigon, para ensayos de resistencia a la compresión.',
          'Ensayo de resistencia a la compresión.'
        ];
      ?>
      <?php foreach ($equipos_lab as $i => $img): ?>
        <div class="col-sm-6 col-md-3">
          <a href="../assets/img/lab/<?= $img ?>" data-bs-toggle="modal" data-bs-target="#modalEq<?= $i ?>">
            <img src="../assets/img/lab/<?= $img ?>" alt="<?= $nombres[$i] ?>" 
                 class="img-fluid rounded shadow-sm" loading="lazy">
          </a>
          <!-- Modal de imagen -->
          <div class="modal fade" id="modalEq<?= $i ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <img src="../assets/img/lab/<?= $img ?>" class="img-fluid w-100" alt="<?= $nombres[$i] ?>">
                  <div class="p-3">
                    <h5 class="fw-bold mb-2" style="color: #003366;"><?= $nombres[$i] ?></h5>
                    <p class="text-muted"><?= $descripciones[$i] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

  <!-- Botón volver al inicio -->
  <div class="text-center my-5">
    <a href="../index.php#inicio" class="btn btn-primary fw-bold">
      &larr; Volver al inicio
    </a>
  </div>

</main>

<?php
// Incluir footer y scripts

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>
