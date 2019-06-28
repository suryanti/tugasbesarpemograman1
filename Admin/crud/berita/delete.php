<?php

    include '../../../koneksi.php';

    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "DELETE FROM tb_post WHERE id_post='$id' ");

    if($sql){
        header("location:../../index.php?page=berita&delete=success");
    }else{
        header("location:../../index.php?page=berita&delete=fail");
    }

?>