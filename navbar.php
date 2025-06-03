<?php
// includes/navbar.php
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(0, 51, 102);">

<div class="d-flex align-items-center px-3 py-2 text-white" style="background-color: #616161; font-size: 0.9rem;">
<img src="https://flagcdn.com/w40/cl.png" alt="Chile" style="width: 24px; height: auto;" class="me-2">
  <div class="me-2">
    <i class="bi bi-geo-alt-fill me-1 text-warning"></i> 
    <select id="ciudadSelect" class="form-select form-select-sm d-inline-block" style="width: auto; display: inline-block;">
      <option value="Santiago,CL">Santiago</option>
      <option value="Valparaíso,CL">Valparaíso</option>
      <option value="Concepción,CL">Concepción</option>
      <option value="La Serena,CL">La Serena</option>
      <option value="Puerto Montt,CL">Puerto Montt</option>
      <option value="Antofagasta,CL">Antofagasta</option>
      <option value="Temuco,CL">Temuco</option>
      <option value="Iquique,CL">Iquique</option>
    </select>
  </div>
  <div id="weatherInfo" class="ms-2"></div>
</div>



  <div class="container">
   <a href="index.php">
    <img src="assets/img/logo-ing-lab.png" alt="Hormitec Logo" class="navbar-logo">
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php#inicio">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="serviciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="serviciosDropdown">
            <li><a class="dropdown-item" href="index.php#laboratorio">Hormitec Laboratorio</a></li>
            <li><a class="dropdown-item" href="index.php#ingenieria">Hormitec Ingeniería</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#proyectos">Proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#acreditaciones">Acreditaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#nosotros">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-warning fw-bold ms-3" href="http://hormigon.hormitec.cl/hormigon/" target="_blank" style="background-color: #FFC300; color: #000;">
            SIHOL
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
