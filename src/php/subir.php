<?php
include 'conn.php';

if (isset($_POST['subir_video'])) {
    # code...
    $materia = $_POST['materia'];
    $titulo = $_POST['titulo'];
    $link_video = $_POST['link_video'];

    $sql = "INSERT INTO asignatura_1 (materia, titulo, link_video ) VALUES ('$materia', '$titulo', '$link_video')";
    $consult = mysqli_query($conn, $sql);

    if (!$conn) {
        # code...
        $_SESSION['error_message'] = 'Error al subir a la base de datos';
        $_SESSION['error_message_type'] = 'danger';
        header("Location:../home.php");
        
    }else{
        $_SESSION['success_message'] = 'Se ha subido un nuevo video';
        $_SESSION['success_message_type'] = 'success';
        header("Location:../home.php");
    }
}

?>