<?php
    // Incluimos el archivo que contiene la conexión a la base de datos
    require 'conexion.php';

    // Verificamos si el formulario fue enviado mediante el método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Obtenemos los datos enviados desde el formulario

        $nombre = htmlspecialchars($_POST['nombre']);
        $apellido = htmlspecialchars($_POST['apellido']);
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];
        $nombre_usuario = htmlspecialchars($_POST['nombre_usuario']);
        $cedula = htmlspecialchars($_POST['cedula']);

        $consulta = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, email, password, nombre_usuario, cedula) VALUES (?, ?, ?, ?, ?, ?)");

         // Encriptar la contraseñas
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // "ss" indica que se están enviando dos cadenas de texto (string, string)
        $consulta->bind_param("ssssss", $nombre, $apellido, $email, $passwordHash, $nombre_usuario, $cedula);

        // Ejecutamos la consulta
        if ($consulta->execute()) {
            // Si se insertó, redirigimos al usuario a la página de listar
            header("Location: Bienvenido.php");
        } else {
            // Si hubo un error, lo mostramos
            echo "Error al inscribirse: " . $consulta->error;
        }

        // Cerramos la consulta y la conexión
        $consulta->close();
        $conexion->close();
    }
?>