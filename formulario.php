<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

    <title>Formulario de Registro</title>

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




<body class="sub_page">
  <div class="top_container ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Fanadesh
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
                  <a class="nav-link" href="formulario.php"> Registrar </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="login.php"> iniciar sesion </a>
                </li>
              </ul>
            </div>

        </nav>
      </div>
    </header>

  </div>
  <!-- end header section -->

</head>


<body>

  <section class="contact_section ">
        <div class="container">
      <div class="row">
        <div class="col-md-6">
    <div class="d-flex justify-content-center d-md-block">
    <h2>Formulario de Registro</h2>
    </div>
    <form action="procesar.php" method="POST">
         <div class="contact_form-container">

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="Nombre" required><br><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido" required><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Contrasena:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <label for="nombre_usuario">Nombre de Usuario:</label><br>
        <input type="text" name="nombre_usuario" id="nombre_usuario" required><br><br>

        <label for="cedula">Cédula:</label><br>
        <input type="text" name="cedula" id="cedula" required><br><br>

        <input type="submit" value="Inscribir">
        
      </div>

    </form>
          <div class="imregis">
            <img src="img/students.jpg" alt="">
          </div>
    </div>
  </div>
 </div>
</section>

<!-- end contact section -->
  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
        Escuela 24 de Julio
      </h2>
    </div>
    <div class="container">
      <div class="social_container">

        <div class="social-box">
          <a href="">
            <img src="img/fb.png" alt="">
          </a>

          <a href="">
            <img src="img/twitter.png" alt="">
          </a>
          <a href="">
            <img src="img/linkedin.png" alt="">
          </a>
          <a href="">
            <img src="img/instagram.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

   <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 1998 All Rights Reserved By
      <a href="">Unidad Educativa 24 de Julio</a>
    </p>
  </section>
<!-- footer section -->

</body>

</html>