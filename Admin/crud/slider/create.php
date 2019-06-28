<?php

    include '../../../koneksi.php';

    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $path = "../../../images/slider/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "INSERT INTO tb_slider VALUES('','$foto')");
        if($sql){
            header('location:../../index.php?page=slider&create=success');
        }else{
            header('location:../../index.php?page=slider&create=fail');
        }
    }

?>