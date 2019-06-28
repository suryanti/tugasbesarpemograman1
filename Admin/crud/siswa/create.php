<?php

    include '../../../koneksi.php';

    $nis = $_POST['nis'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = date('Y-m-d', strtotime($_POST['tgl_lahir']));
    $alamat = $_POST['alamat'];
    $thn_masuk = $_POST['thn_masuk'];
    $path = "../../../images/siswa/".$foto;

    if(move_uploaded_file($tmp_foto, $path)){
        $sql = mysqli_query($koneksi, "INSERT INTO tb_siswa VALUES('$nis','$foto','$nama','$jk','$tmp_lahir','$tgl_lahir','$alamat','$thn_masuk')");
        if($sql){
            header('location:../../index.php?page=siswa&create=success');
        }else{
            header('location:../../index.php?page=siswa&create=fail');
        }
    }

?>