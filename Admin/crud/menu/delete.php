<?php

    include '../../../koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE from tb_menu WHERE id_menu = '$id' ");
    
    if($sql){
        header('location:../../index.php?page=menu&delete=success');
    }else{
        header('location:../../index.php?page=menu&delete=fail');
    }

?>