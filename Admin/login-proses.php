<?php

    include '../koneksi.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE nama_user = '$username' AND password = '$password'");
    $execute = mysqli_num_rows($sql);
    $data = mysqli_fetch_array($sql);

    if ($execute > 0){
        session_start();

        $_SESSION['adminid'] = $data['id_user'];
        $_SESSION['namauser'] = $data['nama_user'];
        header('location:index.php');
    }else{
        header('location:login.php?login=wrong');
    }
?>