<?php
session_start();
$session = $_SESSION['user_email_session'];
if ($session == null || $session = '') {
  header("location:../credensiales/login.php");
  die();
}
session_destroy();
header("location:../credensiales/login.php");
?>