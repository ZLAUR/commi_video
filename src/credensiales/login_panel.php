<?php
include '../php/conn.php';

if (isset($_POST['ingresar_panel_user'])) {
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  $sql = "SELECT * FROM login_user WHERE correo='$correo' && contrasena='$contrasena'";
  $consult = mysqli_query ($conn, $sql);

  $fila = mysqli_num_rows($consult);

  if ($fila>0) {
    // code...
    header("Location:../home.php");
  }else {
    // code...
    $_SESSION['error_message_login'] = 'El correo electrónico o la contraseña son incorrectos.';
    $_SESSION['error_message_type_login'] = 'danger';
    header("Location:login.php");
  }
}

 ?>
