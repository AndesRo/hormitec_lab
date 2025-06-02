<?php
// pages/blog.php
?>
<section id="blog" class="py-5">
  <div class="container">
 <h2 class="section-title text-center fw-bold mb-5"
    style="color: #003366; font-size: 2.8rem; text-transform: uppercase;
           font-family: 'Poppins', sans-serif; position: relative; padding-bottom: 12px;">
    <i class="bi bi-newspaper" style="color: #FFC300; margin-right: 8px;"></i>
    Blog – Noticias y Novedades
    <span style="display: block; width: 120px; height: 5px; 
                 background: linear-gradient(to right, #003366, #FFC300);
                 margin: 10px auto 0; border-radius: 3px;">
    </span>
</h2>


    <?php
      // Array de entradas del blog
   $posts = [
 [
  'titulo'       => 'Guía para Usar el Sistema SIHOL',
  'fecha'        => '01 de junio de 2025',
  'img'          => 'assets/img/sihol.jpg',
  'descripcion'  => 'Aprende paso a paso cómo usar el sistema SIHOL para gestionar ensayos, certificados y más.',
  'contenido'    => "El sistema SIHOL es una plataforma desarrollada por Hormitec para gestionar ensayos de laboratorio, certificados, obras y reportes técnicos.\n\n🟢 Paso 1: Iniciar sesión\nAccede a https://sihol.hormitec.cl con tu usuario y clave asignada.\n\n🟢 Paso 2: Registrar un nuevo ensayo\nDesde el menú “Ensayos” elige “Nuevo Ensayo”. Ingresa los datos del proyecto, tipo de material, fecha, responsable técnico y adjunta observaciones si corresponde.\n\n🟢 Paso 3: Generar certificados\nUna vez aprobado el ensayo, puedes generar un certificado PDF firmado digitalmente desde la sección de resultados.\n\n🟢 Paso 4: Seguimiento por obra\nEn el módulo de “Obras” puedes visualizar el historial de ensayos por proyecto, ordenarlos por fecha, tipo de ensayo o estado.\n\n📘 Recursos adicionales:\n- Manual en PDF: assets/docs/manual-usuario-sihol.pdf\n- Canal de soporte: soporte@hormitec.cl\n\nEsta guía está diseñada para ayudarte a sacar el máximo provecho del sistema SIHOL, agilizando el trabajo del laboratorio técnico y asegurando trazabilidad en todos los procesos."
],

        [
          'titulo'       => 'Consejos para Ensayos de Suelo',
          'fecha'        => '30 de abril de 2025',
          'img'          => 'assets/img/blog/ensayos-suelo.jpg',
          'descripcion'  => 'Aprende buenas prácticas para obtener resultados confiables en ensayos de suelo.',
          'contenido'    => 'Los ensayos de compactación y granulometría son fundamentales para garantizar la estabilidad de las estructuras. Asegúrate de seguir estas cinco recomendaciones: calibrar equipos, tomar muestras representativas, mantener la temperatura controlada, realizar ensayos duplicados y documentar cada procedimiento con fotografías.'
        ],
        [
          'titulo'       => 'Galería de Proyectos Destacados',
          'fecha'        => '10 de abril de 2025',
          'img'          => 'assets/img/blog/galeria-proyectos.jpg',
          'descripcion'  => 'Explora nuestros proyectos más emblemáticos en construcción y obra civil.',
          'contenido'    => 'Desde puentes vehiculares hasta grandes centros comerciales, en Hormitec hemos participado en una variedad de proyectos. En esta galería te mostramos un resumen de seis de nuestros trabajos más destacados, con imágenes y datos técnicos relevantes para cada uno.'
        ],
        [
          'titulo'       => 'Webinar Gratuito: Control de Calidad',
          'fecha'        => '25 de marzo de 2025',
          'img'          => 'assets/img/blog/webinar-calidad.jpg',
          'descripcion'  => 'Únete a nuestro próximo webinar sobre control de calidad de materiales.',
          'contenido'    => 'Este 5 de junio impartiremos un webinar gratuito donde nuestros especialistas compartirán técnicas avanzadas de control de calidad. Regístrate a través de nuestro formulario de contacto y recibe un certificado digital de asistencia.'
        ],
      ];
    ?>

    <div class="row g-4">
      <?php foreach ($posts as $idx => $post): ?>
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-0 shadow-sm">
            <img src="<?= $post['img'] ?>" class="card-img-top img-fluid rounded-top" alt="<?= htmlspecialchars($post['titulo']) ?>" loading="lazy">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fw-bold" style="color: #003366;"><?= htmlspecialchars($post['titulo']) ?></h5>
              <small class="text-muted mb-2"><?= htmlspecialchars($post['fecha']) ?></small>
              <p class="card-text text-muted mb-4"><?= htmlspecialchars($post['descripcion']) ?></p>
              <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalPost<?= $idx ?>">
                Leer más
              </button>
            </div>
          </div>
        </div>

        <!-- Modal de contenido completo -->
        <div class="modal fade" id="modalPost<?= $idx ?>" tabindex="-1" aria-labelledby="modalPostLabel<?= $idx ?>" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header" style="background-color: #003366;">
                <h5 class="modal-title text-white" id="modalPostLabel<?= $idx ?>"><?= htmlspecialchars($post['titulo']) ?></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
              </div>
              <div class="modal-body">
                <img src="<?= $post['img'] ?>" class="img-fluid rounded mb-4" alt="<?= htmlspecialchars($post['titulo']) ?>">
                <p class="text-muted"><?= nl2br(htmlspecialchars($post['contenido'])) ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
