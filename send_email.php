<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $zipcode = $_POST["zipcode"];
        $message = $_POST["message"];

        $to = "hello@serranovals.com";  // reemplaza con tu dirección de correo
        $subject = "Nueva solicitud de cita desde el sitio web";
        $headers = "De: $email" . "\r\n" .
                   "Content-type: text/html; charset=UTF-8" . "\r\n";
        $body = "Nombre: $name<br>Email: $email<br>Teléfono: $phone<br>Código Postal: $zipcode<br>Mensaje: $message";

        if (mail($to, $subject, $body, $headers)) {
            http_response_code(200); // Todo salió bien, se envió el correo.
            exit;
        } else {
            http_response_code(500); // Hubo un error al intentar enviar el correo.
            exit;
        }
    } else {
        http_response_code(405); // Método no permitido, se hizo una solicitud que no es POST.
    }
?>
