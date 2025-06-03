<?php
// pages/acreditaciones.php
?>
<section id="acreditaciones" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title text-center fw-bold mb-5"
    style="color: #003366; font-size: 2.8rem; text-transform: uppercase;
           font-family: 'Poppins', sans-serif; 
           position: relative; padding-bottom: 12px;">
    Acreditaciones
    <span style="display: block; width: 100px; height: 5px; 
                 background: linear-gradient(to right, #003366, #FFC300);
                 margin: 10px auto 0; border-radius: 3px;">
    </span>
</h2>

<p class="text-center fs-5" style="color: #555; font-family: 'Poppins', sans-serif; max-width: 800px; margin: 0 auto;">
    En Hormitec, nos comprometemos con los más altos estándares de calidad y precisión en cada análisis. 
    Nuestras acreditaciones reflejan el reconocimiento y confianza de la industria, garantizando resultados confiables para cada proyecto.
</p>


    <?php
      // Array de acreditaciones: título, miniatura y ruta del PDF
      $acreditaciones = [
        [
          'titulo' => 'Acreditación Laboratorio Hormitec LE546',
          'img'    => 'assets/img/logos/acreditacion LE546.png',
          'pdf'    => 'assets/pdf/le-546(1).pdf'
        ],
        [
          'titulo' => 'Acreditación Laboratorio Hormitec LE547',
          'img'    => 'assets/img/logos/acreditacion LE547.png',
          'pdf'    => 'assets/pdf/le547(2).pdf'
        ],
        [
          'titulo' => 'Registro Oficial Laboratorios de Control Técnico de Calidad de Construcción',
          'img'    => 'assets/img/logos/logo ministerio.png',
          'pdf'    => 'assets/pdf/certificado de inscripcion (3).pdf'
        ],
        // Agrega más acreditaciones según sea necesario
      ];
    ?>
    <div class="row g-4">
  <?php foreach ($acreditaciones as $idx => $ac): ?>
    <div class="col-sm-6 col-md-4">
      <div class="card border-0 shadow-lg rounded-4 h-100 transition-transform" style="transition: transform 0.3s;">
        <img src="<?= $ac['img'] ?>" class="card-img-top rounded-top-4" alt="<?= htmlspecialchars($ac['titulo']) ?>" loading="lazy">
        <div class="card-body d-flex flex-column p-4">
          <h5 class="card-title fw-semibold mb-3" style="color: #003366; font-family: 'Poppins', sans-serif; font-size: 1.1rem;">
            <?= htmlspecialchars($ac['titulo']) ?>
          </h5>
          <div class="mt-auto d-grid gap-2">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalAcreditacion<?= $idx ?>">
              <i class="bi bi-eye"></i> Ver PDF
            </button>
            <a href="<?= $ac['pdf'] ?>" class="btn text-dark fw-semibold" style="background-color: #FFC300;" download>
              <i class="bi bi-download"></i> Descargar PDF
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalAcreditacion<?= $idx ?>" tabindex="-1" aria-labelledby="modalAcreditacionLabel<?= $idx ?>" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #003366;">
            <h5 class="modal-title text-white" id="modalAcreditacionLabel<?= $idx ?>"><?= htmlspecialchars($ac['titulo']) ?></h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body p-0" style="height: 80vh;">
            <iframe src="<?= $ac['pdf'] ?>" width="100%" height="100%" style="border:none;">
              Tu navegador no soporta ver PDFs en línea. <a href="<?= $ac['pdf'] ?>">Descarga el PDF</a>.
            </iframe>
          </div>
          <div class="modal-footer">
            <a href="<?= $ac['pdf'] ?>" class="btn text-dark fw-semibold" style="background-color: #FFC300;" download>
              Descargar PDF
            </a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
