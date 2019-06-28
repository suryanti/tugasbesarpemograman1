<?php

    include '../../../koneksi.php';

    $kategori = $_POST['kategori'];
    $slug = str_replace(" ", "", $kategori);

    $sql = mysqli_query($koneksi, "INSERT INTO tb_kategoripost VALUES('','$kategori','$slug')");

    if($sql){
        header("location:../../index.php?page=kategoriberita&create=success");
    }else{
        header("location:../../index.php?page=kategoriberita&create=fail");
    }
?>