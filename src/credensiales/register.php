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
            <img class="logo" src="https://i.ibb.co/gPK5xQK/LG1.png" alt="commi_video" width="50" height="50">
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
