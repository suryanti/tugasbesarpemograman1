<?php

    include '../../../koneksi.php';

    $id = $_POST['id'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $path = "../../../images/slider/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "UPDATE tb_slider SET slider='$foto' WHERE id_slider='$id' ");
        if($sql){
            header('location:../../index.php?page=slider&create=success');
        }else{
            header('location:../../index.php?page=slider&create=fail');
        }
    }

?>