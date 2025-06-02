<?php
// enviar.php

// Configuración
$destinatario = 'contacto@hormitec.cl';  // Cambia al correo deseado
$asuntoPrefix = '[Contacto Hormitec]';

// Ruta del archivo de respaldo (CSV)
$csvFile = __DIR__ . '/backups/contactos.csv';

// Función simple para validar RUT chileno
function validarRut($rut) {
    if (!preg_match('/^\d{1,2}\.\d{3}\.\d{3}-[\dkK]$/', $rut)) {
        return false;
    }
    // Podrías implementar el cálculo del dígito verificador aquí si lo deseas.
    return true;
}

// Verificar que se haya enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger y sanear datos
    $nombre     = trim($_POST['nombre'] ?? '');
    $rut        = trim($_POST['rut'] ?? '');
    $email      = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $telefono   = trim($_POST['telefono'] ?? '');
    $solicitud  = trim($_POST['solicitud'] ?? '');
    $mensaje    = trim($_POST['mensaje'] ?? '');

    $errores = [];

    // Validaciones
    if (empty($nombre)) {
        $errores[] = 'El nombre es obligatorio.';
    }
    if (empty($rut) || !validarRut($rut)) {
        $errores[] = 'El RUT es obligatorio y debe tener formato válido (p.ej., 12.345.678-9).';
    }
    if (!$email) {
        $errores[] = 'El correo electrónico es obligatorio y debe ser válido.';
    }
    if (empty($telefono)) {
        $errores[] = 'El teléfono es obligatorio.';
    }
    if (empty($solicitud) || !in_array($solicitud, ['cotizacion','reclamo','consultas'])) {
        $errores[] = 'Debes seleccionar un tipo de solicitud válido.';
    }
    if (empty($mensaje)) {
        $errores[] = 'El mensaje no puede estar vacío.';
    }

    if (empty($errores)) {
        // Construir el cuerpo del correo
        $asunto = "$asuntoPrefix " . ucfirst($solicitud);
        $cuerpo = "Has recibido una nueva solicitud de contacto:\n\n";
        $cuerpo .= "Nombre: $nombre\n";
        $cuerpo .= "RUT: $rut\n";
        $cuerpo .= "Email: $email\n";
        $cuerpo .= "Teléfono: $telefono\n";
        $cuerpo .= "Tipo de solicitud: $solicitud\n\n";
        $cuerpo .= "Mensaje:\n$mensaje\n";

        $headers  = "From: $nombre <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Enviar correo
        $mailEnviado = mail($destinatario, $asunto, $cuerpo, $headers);

        // Guardar en CSV (respaldo)
        $fechaHora = date('Y-m-d H:i:s');
        $line = [
            $fechaHora,
            $nombre,
            $rut,
            $email,
            $telefono,
            $solicitud,
            str_replace(["\r","\n"], ['',' '], $mensaje)
        ];
        // Asegurar carpeta
        if (!is_dir(dirname($csvFile))) {
            mkdir(dirname($csvFile), 0755, true);
        }
        $fp = fopen($csvFile, 'a');
        if ($fp) {
            fputcsv($fp, $line);
            fclose($fp);
            $csvGuardado = true;
        } else {
            $csvGuardado = false;
        }

        if ($mailEnviado && $csvGuardado) {
            // Redirigir con éxito
            header('Location: index.php?status=success#contacto');
            exit;
        } else {
            $errores[] = 'Hubo un error al procesar tu solicitud. Por favor, inténtalo nuevamente más tarde.';
        }
    }

    // Si hay errores, puedes reenviarlos a la página de contacto vía GET o mostrarlos aquí.
    // Por simplicidad, mostraremos los errores directamente:
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Error de envío</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
      <div class="container py-5">
        <div class="alert alert-danger">
          <h4 class="alert-heading">No se pudo enviar tu solicitud:</h4>
          <ul>
            <?php foreach ($errores as $error): ?>
              <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="index.php#contacto" class="btn btn-primary mt-3">Volver al formulario</a>
        </div>
      </div>
    </body>
    </html>
    <?php
    exit;
}

// Si se accede directamente sin POST
header('Location: index.php');
exit;
