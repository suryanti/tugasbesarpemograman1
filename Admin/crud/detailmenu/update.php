<?php

    include '../../../koneksi.php';

    $id_md = $_POST['id_md'];
    $menu = $_POST['menu'];
    $isi_menu = $_POST['isi_menu'];
    $slug_menu = $_POST['slug_menu'];

    $sql = mysqli_query($koneksi, "update tb_menudetail set id_menu='$menu', isi_menu = '$isi_menu', slug_menu = '$slug_menu' where id_md='$id_md' " );

    if($sql){
        header('location:../../index.php?page=menu&create=success');
    }else{
        header('location:../../index.php?page=menu&create=fail');
    }

?>