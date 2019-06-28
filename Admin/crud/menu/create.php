<?php

    include '../../../koneksi.php';

    $menu = $_POST['menu'];

    $sql = mysqli_query($koneksi, "INSERT INTO tb_menu VALUES('','$menu')");

    if($sql){
        header('location:../../index.php?page=menu&create=success');
    }else{
        header('location:../../index.php?page=menu&create=fail');
    }

?>