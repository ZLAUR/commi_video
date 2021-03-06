<?php session_start ();?>
<?php include '../php/conn.php'?>


<?php
$session = $_SESSION['user_email_session'];
if ($session == null || $session = '') {
  header("location:../credensiales/login.php");
  die();
}



?>

<?php
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM asignatura_1 WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['materia'];
    $titulo = $row['titulo'];
    $video = $row['link_video'];
    $fecha = $row['fecha'];
  }elseif (mysqli_num_rows($result) == 0) {
    $_SESSION['message_404_error']= 'El video que buscas no existe en nuestra base de datos 404';
    $_SESSION['error_message_404']='danger';
    header("location:../home.php");
  }
}
?>



    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0 user-scalable=no">
        <meta name="theme-color" content=" #0F2027">
        <title>
            <?php echo $row['titulo']?>
        </title>
        <meta name="description" content="<?php echo $row['titulo']?>">
        <link rel="shortcut icon" href="<?php echo $_SESSION['favicon']?>" type="image/x-icon">
        <!-- CSS only -->
        <link rel="shortcut icon" href="img/logo_video_h.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/logo_video_h.png" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://vjs.zencdn.net/7.8.2/video-js.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/lst_video.css">
        <link rel="stylesheet" href="css/reproductor.css">

    </head>
    <body>

      <div class="padre">
        <div class="video">

           <h1 class="titulo"> <a href="../home.php" class="inici_home">Inicio | </a> <?php echo $titulo; ?></h1>

                <video controls id="video-cm" class="videol video-cm video-js vjs-16-9 vjs-big-play-centered vjs-big-play-button">
                    <source src="<?php echo $row['url']?><?php echo $video?>">
                </video>
          <br>
          <span class="info"><b>Materia:</b> <?php echo $title; ?></span><br>
          <span class="info"><b>Fecha:</b> <?php echo $fecha; ?></span><br>
        </div>

        <div class="video2">
          <div class="lista_de_reproduccion">
          <h2 class="titulo_de_lista">Lista de reproducción</h2>
          <div class="lista_de_reproduccion_videos">
            <?php
                $query = " SELECT * FROM asignatura_1";

                $consult = mysqli_query($conn,$query);

                while ($row = mysqli_fetch_array($consult)) { ?>
                        <h1 class="lista_titulo"><?php echo $row['titulo']?></h1>
                        <a href="list_video.php?id=<?php echo $row['id']?>">
                          <video
                            class="miniature_video"
                            muted width="300"
                            height="300"
                            src="<?php echo $row['url']?><?php echo $row['link_video']?>">
                          </video>
                        </a>

            <?php }?>
          </div>
        </div>
        </div>
        </div>


<?php if (isset($_SESSION['message_error'])) {?>
  <div class="alert alert-<?= $_SESSION['message_type'];?>" role="alert">
  <?= $_SESSION['message_error']?>
  </div>
<?php session_unset();}?>

            <!-- jQuery and JS bundle w/ Popper.js -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            <script src="https://vjs.zencdn.net/7.8.2/video.min.js"></script>
            <script src="js/reproductor.js"></script>
        </body>
        </html>
