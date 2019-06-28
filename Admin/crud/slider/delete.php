<?php

    include '../../../koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE from tb_slider WHERE id_slider = '$id' ");
    
    if($sql){
        header('location:../../index.php?page=slider&delete=success');
    }else{
        header('location:../../index.php?page=slider&delete=fail');
    }

?> 