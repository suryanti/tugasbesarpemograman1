<?php 

    error_reporting(0);

    if($_GET['page']==""){
        include 'beranda.php';
    } else if($_GET['page']=="visimisi"){
        include 'visimisi.php';
    } else if($_GET['page']=="profil"){
        include 'profil.php';
    } else if($_GET['page']=="strukturorganisasi"){
        include 'struktur.php';
    } else if($_GET['page']=="guru"){
        include 'guru.php';
    } else if($_GET['page']=="siswa"){
        include 'siswa.php';
    } else if($_GET['page']=="detail_berita"){
        include 'detail_berita.php';
    }

?>