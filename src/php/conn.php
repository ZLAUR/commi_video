<?php 
error_reporting(0);
session_start ();
$conn = mysqli_connect('localhost', 'root', '', 'commi_video');

if (!$conn) {
    $_SESSION['message_error'] = 'ERROR AL CONECTAR A LA BASE DE DATOS !ERROR!';
    $_SESSION['message_type'] = 'danger';
    $_SESSION['message_img'] = 'https://reygif.com/media/cohete-espacial-21068.gif';
}
?>