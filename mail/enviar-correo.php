<?php
// mail/enviar-correo.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Requiere Composer autoload para PHPMailer
require __DIR__ . '/../vendor/autoload.php';

/**
 * Envía un correo HTML utilizando PHPMailer
 *
 * @param array $data Datos del formulario:
 *                    - nombre
 *                    - rut
 *                    - email
 *                    - telefono
 *                    - solicitud
 *                    - mensaje
 * @return bool True si se envió correctamente, false en caso contrario
 */
function enviarCorreo(array $data): bool
{
    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.tu-servidor.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'usuario@tudominio.cl';
        $mail->Password   = 'tu_contraseña';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Remitente y destinatario
        $mail->setFrom($data['email'], $data['nombre']);
        $mail->addAddress('contacto@hormitec.cl', 'Hormitec');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = sprintf(
            '[%s] Nueva %s de %s',
            date('Y-m-d'),
            ucfirst($data['solicitud']),
            $data['nombre']
        );

        // Cuerpo HTML
        $body  = '<h2>Solicitud de ' . htmlspecialchars(ucfirst($data['solicitud'])) . '</h2>';
        $body .= '<p><strong>Nombre:</strong> ' . htmlspecialchars($data['nombre']) . '</p>';
        $body .= '<p><strong>RUT:</strong> ' . htmlspecialchars($data['rut']) . '</p>';
        $body .= '<p><strong>Email:</strong> ' . htmlspecialchars($data['email']) . '</p>';
        $body .= '<p><strong>Teléfono:</strong> ' . htmlspecialchars($data['telefono']) . '</p>';
        $body .= '<p><strong>Mensaje:</strong><br>' . nl2br(htmlspecialchars($data['mensaje'])) . '</p>';

        $mail->Body = $body;

        // AltBody (texto plano)
        $alt  = "Solicitud de " . ucfirst($data['solicitud']) . "\n\n";
        $alt .= "Nombre: {$data['nombre']}\n";
        $alt .= "RUT: {$data['rut']}\n";
        $alt .= "Email: {$data['email']}\n";
        $alt .= "Teléfono: {$data['telefono']}\n\n";
        $alt .= "Mensaje:\n{$data['mensaje']}\n";

        $mail->AltBody = $alt;

        // Enviar correo
        return $mail->send();
    } catch (Exception $e) {
        error_log('Mailer Error: ' . $mail->ErrorInfo);
        return false;
    }
}

// Procesamiento de datos enviados por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger y sanear
    $nombre    = trim($_POST['nombre'] ?? '');
    $rut       = trim($_POST['rut'] ?? '');
    $email     = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $telefono  = trim($_POST['telefono'] ?? '');
    $solicitud = trim($_POST['solicitud'] ?? '');
    $mensaje   = trim($_POST['mensaje'] ?? '');

    // Validaciones básicas
    $errors = [];
    if (empty($nombre))    $errors[] = 'Nombre requerido';
    if (empty($rut))       $errors[] = 'RUT requerido';
    if (!$email)           $errors[] = 'Email inválido';
    if (empty($telefono))  $errors[] = 'Teléfono requerido';
    if (!in_array($solicitud, ['cotizacion','reclamo','consultas'])) {
        $errors[] = 'Tipo de solicitud inválido';
    }
    if (empty($mensaje))   $errors[] = 'Mensaje requerido';

    if (empty($errors)) {
        // Intentar enviar correo
        $ok = enviarCorreo([
            'nombre'    => $nombre,
            'rut'       => $rut,
            'email'     => $email,
            'telefono'  => $telefono,
            'solicitud' => $solicitud,
            'mensaje'   => $mensaje,
        ]);

        if ($ok) {
            header('Location: ../index.php?status=success#contacto');
            exit;
        } else {
            header('Location: ../index.php?status=fail#contacto');
            exit;
        }
    } else {
        // Enviar errores de vuelta como query string (puedes ajustar según tu front)
        $query = http_build_query(['status' => 'error', 'errors' => $errors]);
        header("Location: ../index.php?{$query}#contacto");
        exit;
    }
}

// Si acceden sin POST
header('Location: ../index.php');
exit;
