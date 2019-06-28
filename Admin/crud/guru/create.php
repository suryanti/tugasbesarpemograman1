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
        $sql = mysqli_query($koneksi, "INSERT INTO tb_karyawan VALUES('$nik','$foto','$nama','$jk','$tmp_lahir','$tgl_lahir','$status','$mengajar','$alamat','$no_hp')");
        if($sql){
            header('location:../../index.php?page=guru&create=success');
        }else{
            header('location:../../index.php?page=guru&create=fail');
        }
    }

?>