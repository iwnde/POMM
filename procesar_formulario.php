<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $affair = $_POST["affair"];
    $message = $_POST["message"];

    // Aquí puedes realizar las acciones necesarias con los datos del formulario, como enviar correos electrónicos o almacenarlos en una base de datos.

    // Ejemplo de impresión de los datos en pantalla:
    echo "Nombre: " . $nombre . "<br>";
    echo "Correo electrónico: " . $email . "<br>";
    echo "Número de teléfono: " . $phone . "<br>";
    echo "Asunto: " . $affair . "<br>";
    echo "Mensaje: " . $message . "<br>";
} else {
    // Si alguien intenta acceder directamente a este archivo, muestra un mensaje de error.
    echo "Acceso denegado.";
}
?>

