<?php

    include '../../../koneksi.php';

    $id_menu = $_POST['id_menu'];
    $menu = $_POST['menu'];

    $sql = mysqli_query($koneksi, "update tb_menu set menu='$menu' where id_menu='$id_menu' " );

    if($sql){
        header('location:../../index.php?page=menu&create=success');
    }else{
        header('location:../../index.php?page=menu&create=fail');
    }

?>