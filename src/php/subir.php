<?php
include 'conn.php';

if (isset($_POST['dubir_video'])) {
    # code...
    $materia=$_POST['materia'];
    $titulo=$_POST['titulo'];
    $url='http://192.168.0.8/videos/general/';
    $video=$_FILES['video_file']['name'];
    $sql = "INSERT INTO asignatura_1(materia, titulo, url, link_video ) VALUES ('$materia', '$titulo','$url', '$video')";
    $cosult=mysqli_query($conn,$sql);
    if (!$cosult) {
        # code...
        $_SESSION['error_upload_video']='El video no se puso subir a la base de datos';
        $_SESSION['error_upload_video_type']='danger';
        header("location:../option/upload_video.php");
    }else{
        $_SESSION['succes_upload_video']='El video se ha subido a la base de datos';
        $_SESSION['succes_upload_video_type']='success';
        header("location:../option/upload_video.php");
        

    }

}

print_r($_FILES);
//extraer el nombre del video
$nombre_file=$_FILES['video_file']['name'];
$guardado=$_FILES['video_file']['tmp_name'];
if (!file_exists('../../../videos/general')) {
    # code...
    mkdir('../../../videos/general/',0777,true);
    if (file_exists('../../../videos/general')) {
        # code...
        if (move_uploaded_file($guardado, '../../../videos/general/'.$nombre_file)) {
            # code...
            echo 'save file';

        }else{
            echo 'error fiel';
        }
    }
}else{
    if (move_uploaded_file($guardado, '../../../videos/general/'.$nombre_file)) {
        # code...
        echo 'save file';

    }else{
        echo 'error fiel';
    }

}

?>