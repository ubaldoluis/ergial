<?php
if (isset($_POST['email'])) {

    // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
    $email_to = "antonio@moravecs.com";
    $email_subject = "Solicitud de informe desde Ergial";

    // Aquí se deberían validar los datos ingresados por el usuario
    if (
        !isset($_POST['first_name']) ||
        // !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['tel']) ||
        // !isset($_POST['comments'])
    ) {

        echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
        echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
        die();
    }

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "Apellido: " . $_POST['last_name'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Teléfono: " . $_POST['tel'] . "\n";
    $email_message .= "Profesión: " . $_POST['profesion'] . "\n";
    $email_message .= "Especialidad: " . $_POST['especialidad'] . "\n";
    $email_message .= "Colegiado: " . $_POST['colegiado'] . "\n";
    $email_message .= "Centro Sanitario: " . $_POST['centroSanitario'] . "\n";
    $email_message .= "Localidad: " . $_POST['localidad'] . "\n";
    $email_message .= "Provincia: " . $_POST['provincia'] . "\n";
    $email_message .= "Comentarios: " . $_POST['destino'] . "\n\n";

    // Ahora se envía el e-mail usando la función mail() de PHP
    $headers = 'From: ' . $email_from . "\r\n" .
        'Reply-To: ' . $email_from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

    // echo "¡El formulario se ha enviado con éxito!";
    header("Location:" .$destino);
die();

}
?>