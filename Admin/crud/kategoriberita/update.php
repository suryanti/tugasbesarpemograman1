<?php

    include '../../../koneksi.php';

    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $slug = str_replace(" ", "", $kategori);

    $sql = mysqli_query($koneksi, "UPDATE tb_kategoripost SET kategori_post='$kategori', slug_katpost='$slug' WHERE id_kat='$id' ");

    if($sql){
        header("location:../../index.php?page=kategoriberita&create=success");
    }else{
        header("location:../../index.php?page=kategoriberita&create=fail");
    }
?>