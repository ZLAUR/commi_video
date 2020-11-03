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
            <?php echo $row['materia']?>
            <?php echo $row['titulo']?>
        </title>
        <link rel="shortcut icon" href="https://i.ibb.co/gPK5xQK/LG1.png" type="image/x-icon">
        <!-- CSS only -->
        <link rel="shortcut icon" href="img/logo_video_h.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/logo_video_h.png" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://vjs.zencdn.net/7.8.2/video-js.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lst_video.css">
        <link rel="stylesheet" href="css/reproductor.css">
        
    </head>


    <body>

        <div class="padre">
            <div class="video">

                <video autoplay controls id="video-cm" class="video-cm video-js vjs-16-9 vjs-big-play-centered vjs-big-play-button">
                    <source src="<?php echo $video?>">                    
                </video>

                <?php if (isset($_SESSION['message_error'])) {?>
                    <div class="alert alert-<?= $_SESSION['message_type'];?>" role="alert">
                    <?= $_SESSION['message_error']?>
                    </div>
                <?php session_unset();}?>
        </div>

        </div>
        
            <!-- jQuery and JS bundle w/ Popper.js -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>            
            <script src="https://vjs.zencdn.net/7.8.2/video.min.js"></script>
            <script src="js/reproductor.js"></script>
        </body>
        </html>