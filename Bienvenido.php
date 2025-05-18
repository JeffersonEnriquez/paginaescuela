<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Escuela 24 de Julio</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Escuela 24 de Julio
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="inicio.php"> inicio <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="login.php">Cerrar sesión</a>

                </li>
              </ul>
            </div>

        </nav>
      </div>
    </header>

<section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h1>
            Bien venido al sistema de educacion de la escuela 24 de Julio
          </h1>
      
          <div class="hero_btn-continer">
            <a href="" class="call_to-btn btn_white-border">
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          
        </div>
      </div>
    </section>
 </div>

    <?php
    require 'conexion.php';
    $resultado = $conexion->query("SELECT * FROM usuarios");
    
?>
 <h2>Lista de Inscritos</h2>
<a href="formulario.php">Nueva inscripción</a>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Contraseña</th>
        <th>Nombre de Usuario</th>
        <th>Cédula</th>
        <th>Fecha</th>
        <th>Acciones</th>
    </tr>
    <?php while ($registros = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= $registros['id'] ?></td>
            <td><?= $registros['nombre'] ?></td>
            <td><?= $registros['apellido'] ?></td>
            <td><?= $registros['email'] ?></td>
            <td><?= $registros['password'] ?></td>
            <td><?= $registros['nombre_usuario'] ?></td>
            <td><?= $registros['cedula'] ?></td>
            <td><?= $registros['fecha_registro'] ?></td>
            <td>
                <a href="editar.php?id=<?= $registros['id'] ?>">Actualizar</a> |
                <a href="eliminar.php?id=<?= $registros['id'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
<h1>


