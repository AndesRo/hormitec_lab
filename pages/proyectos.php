<?php
// pages/proyectos.php
?>
<section id="proyectos" class="py-5">
  <div class="container">
    <h2 class="section-title text-center fw-bold mb-5"
    style="color: #003366; font-size: 2.8rem; text-transform: uppercase;
           font-family: 'Poppins', sans-serif; position: relative; padding-bottom: 12px;">
    Proyectos
    <span style="display: block; width: 120px; height: 5px; 
                 background: linear-gradient(to right, #003366, #FFC300);
                 margin: 10px auto 0; border-radius: 3px;">
    </span>
</h2>

    <?php
      // Array de proyectos: imagen, título y descripción
      $proyectos = [
        ['img' => 'assets/galery/aeropichoy.jpg', 'titulo' => 'Aeropuerto Pichoy', 'descripcion' => 'Principal terminal aéreo de Valdivia, ubicado en Mariquina, a 23 km de la ciudad.'],
        ['img' => 'assets/galery/mall-alerce.jpg', 'titulo' => 'Mall Alerce Puerto Montt',    'descripcion' => 'Moderno centro comercial que ofrece una amplia variedad de tiendas, gastronomía y entretenimiento.'],
        ['img' => 'assets/galery/mall-costanera.jpg', 'titulo' => 'Mall Costanera Puerto Montt',      'descripcion' => 'Principal centro comercial de Puerto Montt, ubicado en la costanera de la ciudad.'],
        ['img' => 'assets/galery/mall-valdivia.jpg', 'titulo' => 'Mall de Valdivia ',    'descripcion' => 'Moderno centro comercial en la capital de la Región de Los Ríos, que ofrece una amplia variedad de tiendas, gastronomía y espacios de entretenimiento.'],
        ['img' => 'assets/galery/viaducto-ptomontt.jpg', 'titulo' => 'Viaducto puerto Montt',        'descripcion' => 'Importante obra vial que conecta la Ruta 5 Sur con la Carretera Austral, facilitando el tránsito y reduciendo la congestión en la ciudad.'],
        ['img' => 'assets/galery/puente-chacao.jpg', 'titulo' => 'Puente Chacao Puerto Montt', 'descripcion' => 'Proyecto de infraestructura que conectará la Isla Grande de Chiloé con el continente chileno a través del Canal de Chacao'],
      ];
    ?>
    <div class="row g-4">
      <?php foreach ($proyectos as $idx => $p): ?>
        <div class="col-sm-6 col-md-4">
          <div class="card border-0 shadow-sm">
            <a href="#" data-bs-toggle="modal" data-bs-target="#modalProyecto<?= $idx ?>">
              <img src="<?= $p['img'] ?>" class="card-img-top img-fluid rounded-top" alt="<?= htmlspecialchars($p['titulo']) ?>" loading="lazy">
            </a>
            <div class="card-body">
              <h5 class="card-title fw-bold" style="color: #003366;"><?= htmlspecialchars($p['titulo']) ?></h5>
              <p class="card-text text-muted"><?= htmlspecialchars($p['descripcion']) ?></p>
            </div>
          </div>
        </div>

        <!-- Modal individual -->
        <div class="modal fade" id="modalProyecto<?= $idx ?>" tabindex="-1" aria-labelledby="modalLabel<?= $idx ?>" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header" style="background-color: #003366;">
                <h5 class="modal-title text-white" id="modalLabel<?= $idx ?>"><?= htmlspecialchars($p['titulo']) ?></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
              </div>
              <div class="modal-body p-0">
                <img src="<?= $p['img'] ?>" class="img-fluid w-100" alt="<?= htmlspecialchars($p['titulo']) ?>">
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
