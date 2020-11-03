<?php include 'php/conn.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" >
    <meta name="theme-color" content="#243B55">
    <title>Home</title>
    <link rel="shortcut icon" href="https://i.ibb.co/LzRysXY/Recurso-1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

<?php if (isset($_SESSION['success_message'])) { ?>
    <div class="alert alert-<?=  $_SESSION['success_message_type']?> alert-dismissible fade show" role="alert">
        <?=  $_SESSION['success_message']?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php session_unset(); }?>

<?php if (isset($_SESSION['error_message'])){ ?>
    <div class="alert alert-<?=  $_SESSION['error_message_type']?> alert-dismissible fade show" role="alert">
        <?=  $_SESSION['error_message']?>
</div>
<?php session_unset(); }?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-dark ml-auto btn-block" data-toggle="modal" data-target="#exampleModal">
  Subir Video.
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="php/subir.php" method="POST">
        <input name="materia" class="form-control p-10" type="text" placeholder="Materia"><br>
        <input name="titulo" class="form-control p-10" type="text" placeholder="Titulo"><br>
        <input name="link_video" class="form-control" type="text" placeholder="Link del video"><br>
        <input name="subir_video" class="btn btn-dark btn-block" type="submit" value="Subir"><br>

  </form>
    </div>
  </div>
</div>



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
