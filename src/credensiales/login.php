<?php include '../php/conn.php'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta name="theme-color" content="red">
    <title>Login</title>
    <link rel="shortcut icon" href="https://i.ibb.co/gPK5xQK/LG1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style media="screen">
      @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
    @font-face {
      font-family: Apija demo;
      src: url(tipografias_login/Apija_demo.otf);
    }
    body{
      background-image: url(tipografias_login/BC1.1.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
    }
    .title{
      font-family: 'Anton', sans-serif;
      font-size: 35px;
      color: #203A43;
      text-align: center;
      padding: 10px
    }
    .login{
      width: 30%;
      margin: auto;
      margin-top: 8%;
      padding:10px
    }
    .input_100{
      margin-bottom: 20px;
    }
    .logo{
      width: 70px;
      height: auto;
      margin: auto;
      display: flex;
    }
    .btn_amarillo{
      background:yellow;
      
    }
    .btn_amarillo:hover{
      background:red;
      
    }
    a{
        color:black;
      }
    @media (max-width: 960px){
      .title{
        font-size: 25px;
      }
      .login{
        width: 80%;
        margin: auto;
        margin-top: 10%;
      }
      .input_100{
        margin-bottom: 20px;
      }


    }
    </style>
  </head>
  <body>

    <form class="login" action="login_panel.php" method="POST">

      <img class="logo" src="https://i.ibb.co/gPK5xQK/LG1.png" width="30" height="30"  alt="">
      <h1 class="title">Welcome a to Commi video</h1>
      <?php
      //tipo de error al conectar a la base de batos
       if (isset($_SESSION['message_error'])){ ?>
          <div class="alert alert-<?=  $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
              <?=  $_SESSION['message_error']?>
      </div>
      <?php session_unset(); }?>

      <?php
      //tipo de erro de la contraseña es incorrecta
      if (isset($_SESSION['error_message_login'])) {?>
        <div class="alert alert-<?= $_SESSION['error_message_type_login']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['error_message_login']?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
        </div>
      <?php session_unset(); } ?>
        <input class="input_100 form-control" type="email" placeholder="Correo electrónico" name="correo" value="" required>
        <input class="input_100 form-control" type="password" placeholder="Contraseña" name="contrasena" value="" required>
        <input class="input_100 btn btn_amarillo btn-block" type="submit" value="Ingresar" name="ingresar_panel_user" value="">
        <a href="register.php"><b>* Registrate si aún no tienes cuenta </a>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
