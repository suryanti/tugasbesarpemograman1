<?php

    include '../../../koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE from tb_karyawan WHERE nik = '$id' ");
    
    if($sql){
        header('location:../../index.php?page=guru&delete=success');
    }else{
        header('location:../../index.php?page=guru&delete=fail');
    }

?>