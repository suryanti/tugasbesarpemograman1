<?php

    include '../../../koneksi.php';

    $menu = $_POST['menu'];
    $isi_menu = $_POST['isi_menu'];
    $slug = $_POST['slug'];

    $sql = mysqli_query($koneksi, "INSERT INTO tb_menudetail VALUES('','$menu','$isi_menu','$slug')");

    if($sql){
        header('location:../../index.php?page=menu&create=success');
    }else{
        header('location:../../index.php?page=menu&create=fail');
    }

?>