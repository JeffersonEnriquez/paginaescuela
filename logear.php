<?php

// Incluimos el archivo que contiene la conexión a la base de datos
require 'conexion.php'; 
// Verificamos si el formulario fue enviado mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos los datos enviados desde el formulario
    $nombre_usuario = htmlspecialchars($_POST['nombre_usuario']);
    $password = $_POST['password'];

    // Preparamos la consulta para buscar al usuario en la base de datos
    $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE nombre_usuario = ?");
    $consulta->bind_param("s", $nombre_usuario);
    $consulta->execute();
    $resultado = $consulta->get_result();

    // Verificamos si se encontró al usuario
    if ($resultado->num_rows > 0) {
        // Obtenemos los datos del usuario
        $usuario = $resultado->fetch_assoc();

        // Verificamos la contraseña
        if (password_verify($password, $usuario['password'])) {
            // Iniciamos la sesión y guardamos el ID del usuario
            session_start();
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nombre_usuario'] = $usuario['nombre_usuario'];

            // Redirigimos al usuario a la página de inicio
            header("Location: Bienvenido.php");
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    // Cerramos la consulta y la conexión
    $consulta->close();
    $conexion->close();
}


?>