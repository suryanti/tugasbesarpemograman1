<?php

    include '../../../koneksi.php';

    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
    $slug = str_replace(" ", "", $judul);
    $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $berita = $_POST['berita'];
    $id_admin = $_POST['id_admin'];
    $path = "../../../images/berita/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "INSERT INTO tb_post VALUES".
        "('','$kategori','$tanggal','$judul','$slug','$foto','$berita','$id_admin')");
        if($sql){
            header('location:../../index.php?page=berita&create=success');
        }else{
            header('location:../../index.php?page=berita&create=fail');
        }
    }

?>