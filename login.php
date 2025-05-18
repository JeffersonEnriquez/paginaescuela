
<!DOCTYPE html>
<html lang="es">
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

    <title>Inicio secion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">


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


</head>

<body>

    <h1>Inicio sesion</h1>

 <form action="logear.php" method="POST">
    <div class="cuadro">
        <label for="nombre_usuario" class="usu">Usuario:</label><br>
        <input type="text" name="nombre_usuario" id="nombre_usuario" ><br><br>

        <label for="password" class="con">Contraseña:</label><br>
        <input type="password" name="password" id="password" ><br><br>
          
        <button type="submit">Iniciar sesión</button>
     </div>


<img src="img/iniciode.jpg" alt="">

</body>
        <style>
        h1{
               transform: translate(20%, 60%);
               position: absolute;
               top: 10%;
               left: 3%;
        }
        .usu{
               transform: translate(10%, 10%);
               position: absolute;
               top: 20%;
               left: 13%;
        }
        .con{
               transform: translate(10%, 60%);
               position: absolute;
               top: 40%;
               left: 10%;
        }
        .usua{
               transform: translate(60%, 60%);
               position: absolute;
               top: 15%;
               left: 10%;
        }
        .cont{
               transform: translate(60%, 60%);
               position: absolute;
               top: 40%;
               left: 10%;
        }
        button{
               transform: translate(60%, 70%);
               position: absolute;
               top: 70%;
               left: 18%;
        }

        img{
                 transform: translate(10%, 18%);
                 position: absolute;
                 top: -9%;
                 left: 20%;
                 padding: 5px;
        }
        
        .cuadro{
                 transform: translate(-10%, 40%);
                 background-color: #f2f2f2;
                 padding: 100px;
                 border-radius: 40px;
                 box-shadow: 10 9 50px rgba(9, 7, 7, 0.1);
                 width: 350px;
                 height: 400px;
                 margin: 70px;
                 margin-top: 10px;
        }

        </body>
</html>



