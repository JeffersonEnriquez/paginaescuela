<?php
    require 'conexion.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $consulta = $conexion->prepare("SELECT nombre, pellido, email, password, nombre_usuario, cedula FROM usuarios WHERE id = ?");
        $consulta->bind_param("i", $id);
        $consulta->execute();
        $consulta->bind_result($nombre, $apellido, $email, $password, $nombre_usuario, $cedula);
        $consulta->fetch();
        $consulta->close();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $nombre_usuario = $_POST['nombre_usuario'];
        $cedula = $_POST['cedula'];

        $consulta = $conexion->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, email = ?, password = ?, nombre_usuario = ?, cedula = ? WHERE id = ?");
        $consulta->bind_param("ssssssi",$nombre, $apellido, $email, $password, $nombre_usuario, $cedula, $id);
        $consulta->execute();
        header("Location: Bienvenido.php");
    }
?>

<h2>Editar Inscripción</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
    Nombre:<br><input type="text" name="nombre" value="<?= $nombre ?>"><br><br>
    Apellido:<br><input type="text" name="apellido" value="<?= $apellido ?>"><br><br>
    Correo:<br><input type="email" name="email" value="<?= $email ?>"><br><br>
    Contraseña:<br><input type="password" name="password" value="<?= $password ?>"><br><br>
    Nombre de Usuario:<br><input type="text" name="nombre_usuario" value="<?= $nombre_usuario ?>"><br><br>
    Cédula:<br><input type="text" name="cedula" value="<?= $cedula ?>"><br><br>
    
    <input type="submit" value="Actualizar">
</form>