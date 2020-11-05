<?php session_start ();?>
<?php include 'php/conn.php';?>

<?php
$session = $_SESSION['user_email_session'];
if ($session == null || $session = '') {
  header("location:credensiales/login.php");
  die();
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" >
    <meta name="theme-color" content="#fff">
    <title>Home</title>
    <link rel="shortcut icon" href="https://i.ibb.co/gPK5xQK/LG1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>



<?php if (isset($_SESSION['message_404_error'])) { ?>
    <div class="alert alert-<?=  $_SESSION['error_message_404']?> alert-dismissible fade show" role="alert">
        <?=  $_SESSION['message_404_error']?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php session_unset(); }?>



<!-- menu de la pagina de inicio-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand title" href="#">
    <img src="https://i.ibb.co/gPK5xQK/LG1.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    Commi Video
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> Subir</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> Perfil</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> Contacto</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="php/session_destroy.php"> Cerrar Sesión</a>
      </li>
    </ul>
  </div>
</nav>

<!-- seccion de bienvenida-->

<section class="info_user">
  <h1 class="info_user_title">Bienvenido <span class="nick_user"><?php echo $_SESSION['user_email_session']?></span> </h1>
  <h2 class="info1">Despliega Hacia arriba para ver los demás vídeos</h2>
  <h3 class="info2">- Los vídeos están organizados según su fecha de subida -</h3>
</section>

<?php if (isset($_SESSION['message_error'])) {?>
    <div class="alert alert-<?= $_SESSION['message_type'];?>" role="alert">
        <?= $_SESSION['message_error']?>
    </div>
    <img class="error_de_conexion" src="<?= $_SESSION['message_img']?>" alt="">
<?php session_unset(); }?>

    <div class="contatiner">
<?php
    $query = " SELECT * FROM asignatura_1";

    $consult = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_array($consult)) { ?>
        <div class="box">
            <a href="asset/list_video.php?id=<?php echo $row['id']?>">
              <video
                class="miniature_video"
                muted width="300"
                height="300"
                src="<?php echo $row['link_video']?>">
              </video>
            </a>
            <h1 class="asignatura">
            <?php echo $row['materia']?>
            <?php echo $row['titulo']?>
            </h1>
        </div>
<?php }?>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>
