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
  'titulo'       => 'Importancia del Control de Calidad en Obras Civiles',
  'fecha'        => '30 de abril de 2025',
  'img'          => 'assets/img/control de calidad.jpg',
  'descripcion'  => 'Descubre por qué el control de calidad de materiales es clave en la seguridad y durabilidad de las construcciones.',
  'contenido'    => "El control de calidad de los materiales en obras civiles es un pilar fundamental para garantizar estructuras seguras, duraderas y eficientes. Desde el concreto hasta los suelos, cada componente debe cumplir con estándares técnicos rigurosos.\n\nUna mala práctica o el uso de materiales defectuosos puede generar fallas estructurales, costos adicionales y riesgos para la seguridad pública.\n\n Previo a la construcción de cualquier obra de ingeniería civil (carreteras, presas, puentes, edificios, casas, entre otras) existe un diseño integral que busca la mejor solución técnica y económica para garantizar la factibilidad y durabilidad de un determinado proyecto.Los ingenieros diseñadores determinan en los análisis realizados, las propiedades de los materiales que serán usados durante la construcción de una obra. En estos diseños se establecen normas y especificaciones técnicas constructivas, las cuales deberán ser cumplidas por los constructores, de tal manera que se consiga plasmar en obra, lo planteado en el proyecto por los profesionales involucrados.\n\nLos materiales de ingeniería que son usados en las diferentes obras civiles, poseen propiedades que dependen muchas veces del proceso constructivo a emplear. Los principales materiales de ingeniería usados en la Región de los Lagos y que deben tener un control in situ durante las diferentes obras constructivas son: Suelos, Hormigon y Áridos. La norma ISO 9000 define a la calidad como “el grado en el que un conjunto de características inherentes cumple con los requisitos”. En el mundo de la construcción la calidad se apega a la concordancia o grado de conformidad entre lo diseñado y lo producido o construido. La responsabilidad de ofrecer una buena calidad de los materiales empleados en obras es exclusiva de quien construye y, a su vez, el inspector o fiscalizador deberá controlar y exigir lo establecido por el diseñador en las especificaciones técnicas. El Inspector tiene la potestad de detener una construcción si detecta algún incumplimiento de las especificaciones técnicas y ordenar la correcta ejecución del trabajo realizado. Es por ello que se recomienda que el constructor o contratista de una obra incluya en el presupuesto ofertado de construcción, un rubro de control de calidad de los materiales empleados en obra, que normalmente no ascienden a más del 1%; garantizando así al propietario o contratante, la calidad de los trabajos entregados. Es de vital importancia promover una cultura de Control y Aseguramiento de la Calidad en cualquier obra de Construcción, por pequeña que ésta sea, pues esto contribuye a garantizar la durabilidad de la misma y minimizar futuras pérdidas en la inversión realizada.\n\n En Hormitec, realizamos ensayos precisos y certificados para verificar que los materiales cumplan con la normativa vigente. Estas pruebas permiten validar la resistencia, durabilidad y comportamiento de los materiales frente a condiciones reales de uso.\n\nRecuerda: una buena obra comienza con un buen control de calidad. ¡Confía en los expertos!"
],

      [
  'titulo'       => 'Errores Comunes en Ensayos de Laboratorio',
  'fecha'        => '20 de abril de 2025',
  'img'          => 'assets/img/muestras aridos.jpg',
  'descripcion'  => 'Evita fallas en tus resultados conociendo los errores más frecuentes en ensayos técnicos.',
  'contenido'    => "Incluso con equipos modernos y personal capacitado, los errores en laboratorio pueden surgir si no se siguen buenas prácticas.\n\nEntre los errores más comunes se encuentran:\n\n1. **Muestras mal etiquetadas o contaminadas**.\n2. **Falta de calibración de equipos**.\n3. **Condiciones ambientales inadecuadas (temperatura/humedad)**.\n4. **Omisión de controles o duplicados**.\n5. **Fallas en el registro de datos o documentación incompleta**.\n\nEstos fallos afectan la confiabilidad del resultado y pueden invalidar todo un proceso constructivo. En Hormitec promovemos protocolos estrictos y auditorías internas periódicas para garantizar calidad y trazabilidad.\n\nUna cultura de mejora continua y formación técnica constante es clave para evitar estos errores."
],

    [
  'titulo'       => 'Recomendaciones para el Muestreo de Hormigones',
  'fecha'        => '12 de abril de 2025',
  'img'          => 'assets/img/logo muestreo.png',
  'descripcion'  => 'Sigue estas recomendaciones clave para un muestreo correcto de hormigones en obra.',
  'contenido'    => "Debido a que es el interés de Laboratorio Hormitec prestar un servicio de calidad y eficiencia se presenta a ustedes una serie de recomendaciones generales a tomar en cuenta en obra o sitio de muestreo para garantizar el cumplimiento de los procedimientos normativos en el Control del Hormigon fresco y en el cuidado respectivo de las probetas durante el periodo de curado inicial, puesto que estos controles garantizan tanto a la hormigonera, como al responsable de la obra que los resultados del Hormigón suministrado
estarán de acuerdo a sus especificaciones. De este modo cualquier alteración en este proceso puede inducir a resultados no representativos del Hormigón fabricado en planta.
•Toma de Muestra y Ajuste de docilidad
NCh 1934
9.2 Control de Recepción
Muestreo del hormigón
Para los fines de cumplimiento de los requisitos del Hormigon especificados en el contrato, las muestras de Hormigon fresco se deben extraer directamente en el momento y sitio de la descarga, entre el 10% y el 90% de la descarga, en la forma prescrita por la norma NCh 171
NCh 171
6.1 Extracción de Muestras de fabricación
Camiones hormigoneras
✓Regular el flujo de descarga del hormigón mediante la velocidad de rotación del tambor, sin estrangular el flujo con la compuerta
✓Efectuar la extracción de muestra en tres o más intervalos regulares durante la descarga de la hormigonera sin incluir el principio ni el final de esta
✓Extraer la porción de cada intervalo pasando una sola vez un recipiente de muestreo por toda la sección del flujo de descarga o bien desviando completamente el flujo hacia el recipiente.
Recipiente de muestreo: serán limpios, de material resistente, no absorbente y químicamente inerte con los componentes del Hormigon, estancos al agua y de capacidad suficiente para contener la muestra o las porciones de muestra, él recipiente para muestreo de hormigón preparado en hormigonera tendrá una abertura de dimensiones superiores a las de la sección del flujo de descarga (comúnmente se emplean carretillas o bateas metálicas, no puede ser las palas)
NCh 170 9.6 Ajuste de Docilidad
Se permite el ajuste de docilidad mediante la adición de agua o aditivos.
✓En el caso de ajustar docilidad mediante la adición de agua, este proceso de ajuste se debe realizar una sola vez, en el momento previo al inicio de la descarga, desde el equipo mezclador. Este proceso de ajuste se debe efectuar en un plazo máximo de 15 minutos, y el equipo de mezclado debe girar el número de revoluciones necesarias para asegurar homogeneidad.
✓En el caso de ajustar la docilidad con aditivos, el diseñador de la dosificación debe indicar el tipo, dosis y modo de empleo del producto a utilizar.
•Protección y cuidado de muestras en el sitio de muestreo
NCh 1934
9.2.3.3 Protección y Cuidado de muestras de Hormigon mientras están en obra
a)El comprador (profesional de obra y/o encargado de calidad) debe poner a disposición del laboratorio encargado de tomar las muestras, un lugar físico cercano al sitio de descarga del hormigón, para guardar las probetas.
b)Tan pronto se terminen de confeccionar las probetas y tomar las precauciones necesarias para su curado, es de responsabilidad del comprador (profesional de obra y/o encargado de calidad) mantener tales condiciones y evitar que las probetas sean movidas o perturbadas hasta el momento de su retiro
c)El laboratorista debe comprobar si las muestras presentan alguna anomalía al momento de retirarlas, situación que debe quedar registrada en el informe de laboratorio correspondiente.
NCh 1017
7.1 Protección y curado inicial de las probetas en obra
Durante el curado inicial de las probetas en obra se debe evitar siempre la perdida de agua por evaporación y se debe mantener la temperatura de ellas entre 16°C Y 27°C desde el momento mismo del moldeado.
Para ello se sugiere el uso del cajón de curado el cual debe ser confeccionado con las dimensiones y materiales necesarios para garantizar la aislación térmica deseada; En caso de no disponer de un cajón de curado , las muestras deben permanecer siempre cubiertas por algún material impermeable, como por ejemplo el polietileno, a fin de evitar la evaporación del agua.
•Información de la toma de muestra
NCh1934
9.3 Informe de Laboratorio
El informe de laboratorio debe contener todos los antecedentes de la toma de la muestra, como por ejemplo la identificación de la obra, tipo de hormigón, representatividad de la muestra los cuales serán parte del informe; esta información es de exclusiva responsabilidad de la constructora y deberá ser entregada a nuestro personal en terreno por el profesional de obra o quien el designe, lo cual se indica a manera informativa en la papeleta de muestreo."
],
[
  'titulo'       => 'Simulador de Certificado Digital',
  'fecha'        => '02 de junio de 2025',
  'img'          => 'assets/img/cert simul.png',
  'descripcion'  => 'Interactúa con un ejemplo práctico de cómo SIHOL genera certificados digitales firmados.',
  'contenido'    => 'Este simulador te permite experimentar cómo se crea un certificado digital con datos de ensayo. Llena un pequeño formulario y descarga el archivo PDF con la información generada automáticamente, incluyendo una firma digital simulada. Ideal para entender la automatización de documentos en SIHOL.'
],

[
  "img" => "assets/img/blog/densidad-arena.jpg",
  "titulo" => "Comportamiento de la densidad aparente suelta según la humedad de la arena",
  "fecha" => "02/06/2025",
  "descripcion" => "La densidad aparente suelta de la arena varía significativamente según su contenido de humedad, lo que influye directamente en la dosificación de hormigones.",
  "contenido" => "El contenido de humedad en la arena tiene un efecto directo en su densidad aparente suelta. A medida que la humedad aumenta desde un estado seco hasta alcanzar la humedad óptima, las partículas de arena tienden a separarse debido al efecto de la tensión superficial del agua, reduciendo su compactación y, por lo tanto, su densidad aparente. 

Este fenómeno es crucial en la dosificación de hormigones, ya que una subestimación o sobreestimación de la humedad puede llevar a errores en la proporción agua/cemento. El conocimiento preciso de la densidad aparente en diferentes niveles de humedad permite ajustar el volumen de arena en la mezcla y mejorar la calidad final del hormigón.

Es recomendable realizar ensayos periódicos para determinar esta relación, especialmente en obras donde la arena se acopia en condiciones variables de clima. Este parámetro también afecta el rendimiento volumétrico del árido fino y el control del asentamiento en obra."
]

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

                   <!-- simulador certificado clientes -->
                <?php if ($post['titulo'] === 'Simulador de Certificado Digital'): ?>
  <form id="formSimuladorCertificado<?= $idx ?>" class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nombre del Cliente</label>
      <input type="text" class="form-control" id="cliente<?= $idx ?>" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Tipo de Ensayo</label>
      <select class="form-select" id="ensayo<?= $idx ?>" required>
        <option value="">Seleccionar...</option>
        <option>Compresión de cilindros</option>
        <option>Granulometría</option>
        <option>Slump</option>
        <option>Contenido de humedad</option>
      </select>
    </div>
    <div class="col-md-6">
      <label class="form-label">Fecha del Ensayo</label>
      <input type="date" class="form-control" id="fecha<?= $idx ?>" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Técnico Responsable</label>
      <input type="text" class="form-control" id="tecnico<?= $idx ?>" required>
    </div>
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-success mt-3">
        <i class="bi bi-file-earmark-pdf"></i> Generar Certificado PDF
      </button>
    </div>
  </form>
<?php else: ?>
  <p class="text-muted"><?= nl2br(htmlspecialchars($post['contenido'])) ?></p>
<?php endif; ?>

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


   <!-- script simulador -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("formSimuladorCertificado<?= count($posts) - 1 ?>");

    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();

        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        const cliente = document.getElementById("cliente<?= count($posts) - 1 ?>").value;
        const ensayo = document.getElementById("ensayo<?= count($posts) - 1 ?>").value;
        const fecha = document.getElementById("fecha<?= count($posts) - 1 ?>").value;
        const tecnico = document.getElementById("tecnico<?= count($posts) - 1 ?>").value;

        doc.setFontSize(18);
        doc.text("CERTIFICADO DE ENSAYO - SIMULACIÓN", 20, 25);
        doc.setFontSize(12);
        doc.text(`Cliente: ${cliente}`, 20, 45);
        doc.text(`Tipo de Ensayo: ${ensayo}`, 20, 55);
        doc.text(`Fecha del Ensayo: ${fecha}`, 20, 65);
        doc.text(`Técnico Responsable: ${tecnico}`, 20, 75);

        doc.setDrawColor(0);
        doc.line(20, 110, 100, 110);
        doc.text("Firma Digital (simulada)", 20, 115);
        doc.setFontSize(10);
        doc.text("Documento generado automáticamente por SIHOL", 20, 140);

        doc.save("certificado-simulacion.pdf");
      });
    }
  });
</script>
