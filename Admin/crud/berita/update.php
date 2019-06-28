<?php

    include '../../../koneksi.php';

    $id = $_POST['id'];
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
        $sql = mysqli_query($koneksi, "UPDATE tb_post SET id_kat='$kategori', tgl_post='$tanggal', judul='$judul' ".
        ", slug_judul='$slug', header='$foto', isi_post='$berita', id_user='$id_admin' WHERE id_post='$id' ");
        if($sql){
            header('location:../../index.php?page=berita&create=success');
        }else{
            header('location:../../index.php?page=berita&create=fail');
        }
    }

?>