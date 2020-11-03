<?php
//REGISTRAR USUARIO
include '../php/conn.php';

if (isset($_POST['ingresar_panel_user'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  $sql = "INSERT INTO login_user(nombre, apellido, correo, contrasena) VALUES ('$nombre', '$apellido', '$correo', '$contrasena')";

  $verificar_user = mysqli_query($conn, "SELECT * FROM login_user WHERE correo = '$correo'");
  if (mysqli_num_rows($verificar_user)>0) {
    $_SESSION['message_email_deney']='El correo electrónico ya existe';
    $_SESSION['message_email_deney_type']='danger';
    header("Location:register.php");
    exit;
  }


  $verificar_pass = mysqli_query($conn, "SELECT * FROM login_user WHERE contrasena = '$contrasena'");
  if (mysqli_num_rows($verificar_pass)>0) {
    $_SESSION['message_pass_deney']='Prueba otra contraseña';
    $_SESSION['message_pass_deney_type']='danger';
    header("Location:register.php");
    exit;
  }
  $consult = mysqli_query ($conn, $sql);

  if (!$consult) {
    // code...
    echo "date_get_last_errors";
  }else {
    // code...
    header("Location:login.php");
  }
}

 ?>
