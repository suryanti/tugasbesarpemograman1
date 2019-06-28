<?php

    include '../../../koneksi.php';

    $nik = $_POST['nik'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = date('Y-m-d', strtotime($_POST['tgl_lahir']));
    $status = $_POST['status'];
    $mengajar = $_POST['mengajar'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $path = "../../../images/guru/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "UPDATE tb_karyawan set nama_karyawan='$nama', foto='$foto'".
        ", jk='$jk', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', status='$status'".
        ", mengajar='$mengajar', alamat='$alamat', no_hp='$no_hp' WHERE nik='$nik' ");
        if($sql){
            header('location:../../index.php?page=guru&update=success');
        }else{
            header('location:../../index.php?page=guru&update=fail');
        }
    }

?>