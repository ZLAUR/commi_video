<?php include '../php/conn.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta name="theme-color" content="red">
    <title>Registro</title>
    <link rel="shortcut icon" href="https://i.ibb.co/gPK5xQK/LG1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style media="screen">
      @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
    @font-face {
      font-family: Apija demo;
      src: url(tipografias_login/Apija_demo.otf);
    }
    body{
      background-image: url(tipografias_login/BC.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    h1{
      font-family: 'Anton', sans-serif;
      text-align: center;
      padding: 20px;
    }
    .register{
      width: 30%;
      margin: auto;
      margin-top:5%;
    }
    .input_100{
      margin-bottom: 20px;
    }
    .contenedor{
      width: 100%;
      height: 100vh;
      position: absolute;
      z-index: 2;
    }
    .logo{
      width: 70px;
      height: auto;
      margin: auto;
      display: flex;
    }
    .btn-amarillo{
      background:yellow;

    }
    .btn-amarillo:hover{
      background:red;

    }
    a{
      color:black;
    }
    .svg{
      max-width: 70px;
      max-height: 70px;
      margin: auto;
    }

    @media (max-width: 960px){

      .register{
        width: 80%;
      }
      h1{
        text-align: center;
        padding: 15px;
      }
    }


    </style>
  </head>
  <body>

    <section>

      <div class="contenedor">

          <form class="register" action="validar_login.php" method="POST">
            <section class="svg">
              <?xml version="1.0" encoding="utf-8"?>
      <svg version="1.1" id="LG1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 1080 1080" style="enable-background:new 0 0 1080 1080;" xml:space="preserve">

      <style type="text/css">
        .st0{fill:rgb(255, 0, 0);}
      </style>

      <path class="st0" d="M540.33,33.33c-280.01,0-507,226.99-507,507s226.99,507,507,507s507-226.99,507-507S820.34,33.33,540.33,33.33z
         M632.47,368.59c-17.84-25.47-44.99-38.2-81.45-38.2c-79.25,0-118.86,70.38-118.86,211.13c0,81.29,10.77,136.4,32.32,165.34
        s51.66,43.41,90.33,43.41c33.33,0,59.78-11.52,79.34-34.55c45.27-53.3,112.26-83.16,182.07-78.89l0.71,0.05
        c-9.49,77.49-38.36,136.4-86.59,176.72c-48.24,40.33-107.3,60.5-177.2,60.5c-85.72,0-155.38-29.58-208.99-88.72
        c-53.61-59.15-80.42-140.91-80.42-245.29c0-97.73,25.93-177.75,77.81-240.06c51.87-62.31,122.72-93.47,212.55-93.47
        c155.61,0,243.22,83.67,262.84,250.98l-2.26,0.14C742.47,462.21,673.98,427.83,632.47,368.59z"/>

      <path d="M682.01,512.14l-143.36-82.76c-10.04-5.8-22.51-5.8-32.55,0c-10.03,5.79-16.27,16.59-16.27,28.18V623.1
        c0,11.59,6.24,22.39,16.27,28.18c5.02,2.9,10.65,4.35,16.28,4.35c5.63,0,11.25-1.45,16.27-4.35l143.36-82.76
        c10.03-5.8,16.27-16.6,16.27-28.19C698.28,528.74,692.04,517.94,682.01,512.14z M529.83,610.19V470.47l121,69.86L529.83,610.19z"/>

        <animateTransform attributeName="transform"
        attributeType="XML"
        type="rotate"
        from="0 0 0"
        to="360 0 0"
        dur="10s"
        repeatCount="indefinite"/>

      </svg>

            </section>
            <h1>Registrate a Commi Video</h1>
            <input class="input_100 form-control" type="text" placeholder="Nombre" name="nombre" value="" required>
            <input class="input_100 form-control" type="text" placeholder="Apellido" name="apellido" value="" required>
            <input class="input_100 form-control" type="email" placeholder="Correo" name="correo" value="" required>
            <input class="input_100 form-control" type="password" placeholder="Contraseña" name="contrasena" value="" required>
            <input class="input_100 btn btn-outline btn-amarillo btn-block"type="submit" value="Registrarse" name="ingresar_panel_user" value="">
            <a href="login.php"><b>* Inicia sesión si ya tienes una cuenta</a>

            <?php if (isset($_SESSION['message_email_deney'])) {?>
              <div class="alert alert-<?= $_SESSION['message_email_deney_type'];?> alert-dismissible fade show" role="alert">
                <strong>Oops!</strong> <?= $_SESSION['message_email_deney'];?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php session_unset(); } ?>

            <?php if (isset($_SESSION['message_pass_deney'])) {?>
              <div class="alert alert-<?= $_SESSION['message_pass_deney_type'];?> alert-dismissible fade show" role="alert">
                <strong>Oops!</strong> <?= $_SESSION['message_pass_deney'];?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php session_unset(); } ?>
          </form>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
