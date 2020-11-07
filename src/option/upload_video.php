<?php
session_start();      
include '../php/conn.php'



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Video</title>
    <link rel="shortcut icon" href="<?php echo $_SESSION['favicon']?>" type="image/x-icon">
    <?php include 'boostrap/bosstrap_css.php'?>
    <link rel="stylesheet" href="css/upload.css">
</head>

<body>



    <form action="../php/subir.php" method="post" enctype="multipart/form-data">
        <div class="contedor">
            <div class="input">
                <h1 class="title">Sube tu video</h1>
                <input class="form-control inpust" type="text" name="materia" placeholder="Materia" required>
                <input class="form-control inpust" type="text" name="titulo" placeholder="Titulo" required>
            </div>
            <div class="file">
                <div class="bt_file" id="file_btn">
                    <section class="svg">
                        <?xml version="1.0" encoding="utf-8"?>
                        <svg version="1.1" id="LG1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1080 1080"
                            style="enable-background:new 0 0 1080 1080;" xml:space="preserve">

                            <style type="text/css">
                            .st0 {
                                fill: rgb(255, 0, 0);
                            }
                            </style>

                            <path class="st0" d="M540.33,33.33c-280.01,0-507,226.99-507,507s226.99,507,507,507s507-226.99,507-507S820.34,33.33,540.33,33.33z
	 M632.47,368.59c-17.84-25.47-44.99-38.2-81.45-38.2c-79.25,0-118.86,70.38-118.86,211.13c0,81.29,10.77,136.4,32.32,165.34
	s51.66,43.41,90.33,43.41c33.33,0,59.78-11.52,79.34-34.55c45.27-53.3,112.26-83.16,182.07-78.89l0.71,0.05
	c-9.49,77.49-38.36,136.4-86.59,176.72c-48.24,40.33-107.3,60.5-177.2,60.5c-85.72,0-155.38-29.58-208.99-88.72
	c-53.61-59.15-80.42-140.91-80.42-245.29c0-97.73,25.93-177.75,77.81-240.06c51.87-62.31,122.72-93.47,212.55-93.47
  c155.61,0,243.22,83.67,262.84,250.98l-2.26,0.14C742.47,462.21,673.98,427.83,632.47,368.59z" />

                            <path
                                d="M682.01,512.14l-143.36-82.76c-10.04-5.8-22.51-5.8-32.55,0c-10.03,5.79-16.27,16.59-16.27,28.18V623.1
	c0,11.59,6.24,22.39,16.27,28.18c5.02,2.9,10.65,4.35,16.28,4.35c5.63,0,11.25-1.45,16.27-4.35l143.36-82.76
  c10.03-5.8,16.27-16.6,16.27-28.19C698.28,528.74,692.04,517.94,682.01,512.14z M529.83,610.19V470.47l121,69.86L529.83,610.19z" />

                            <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="0 0 0"
                                to="360 0 0" dur="10s" repeatCount="indefinite" />

                        </svg>

                    </section>
                    <input class="input_file" id="file" type="file" name="video_file" required>
                </div>
            </div>
            <div class="boton">
                <input class="btn btn-block btn-primary" type="submit" name="dubir_video" value="Subir" required>
            </div>
            <?php if (isset($_SESSION['error_upload_video'])) {?>
            <div class="alert alert-<?= $_SESSION['error_upload_video_type']?> alert-dismissible fade show"
                role="alert">
                <strong>Oops!</strong> <?= $_SESSION['error_upload_video']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); }?>

            <?php if (isset($_SESSION['succes_upload_video'])) {?>
            <div class="alert alert-<?= $_SESSION['succes_upload_video_type']?> alert-dismissible fade show"
                role="alert">
                <strong>Genial</strong> <?= $_SESSION['succes_upload_video']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); }?>
        </div>
    </form>


    <?php include 'boostrap/bosstrap_js.php'?>
    <script src="js/barra_de_estado.js"></script>
</body>

</html>