<?php 
session_start();
include 'src/php/conn.php';
$_SESSION['favicon']='https://i.ibb.co/gPK5xQK/LG1.png';
$titulo='commi video'  ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#11998e">
    <title>
        <?php echo $titulo?>
    </title>
    <link rel="shortcut icon" href="<?php echo $_SESSION['favicon']?>" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="ingresar">
            <a href="src/credensiales/login.php" class="link">Ingresar al sistema</a>
        </div>
    </header>
</body>

</html>


</html>