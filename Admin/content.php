<?php

    error_reporting(0);

    if($_GET['page']=="user"){
        include 'tabel.php';
    }elseif($_GET['page']=="menu"){
        include 'tabel.php';
    }elseif($_GET['page']=="guru"){
        include 'tabel.php';
    }elseif($_GET['page']=="siswa"){
        include 'tabel.php';
    }elseif($_GET['page']=="kategoriberita"){
        include 'tabel.php';
    }elseif($_GET['page']=="berita"){
        include 'tabel.php';
    }elseif($_GET['page']=="slider"){
        include 'tabel.php';
    }elseif($_GET['page']=="tambahuser"){
        include 'form.php';
    }elseif($_GET['page']=="ubahuser"){
        include 'form.php';
    }elseif($_GET['page']=="tambahmenu"){
        include 'form.php';
    }elseif($_GET['page']=="ubahmenu"){
        include 'form.php';
    }elseif($_GET['page']=="tambahdetailmenu"){
        include 'form.php';
    }elseif($_GET['page']=="ubahdetailmenu"){
        include 'form.php';
    }elseif($_GET['page']=="tambahguru"){
        include 'form.php';
    }elseif($_GET['page']=="ubahguru"){
        include 'form.php';
    }elseif($_GET['page']=="tambahsiswa"){
        include 'form.php';
    }elseif($_GET['page']=="ubahsiswa"){
        include 'form.php';
    }elseif($_GET['page']=="tambahkategoriberita"){
        include 'form.php';
    }elseif($_GET['page']=="ubahkategoriberita"){
        include 'form.php';
    }elseif($_GET['page']=="tambahberita"){
        include 'form.php';
    }elseif($_GET['page']=="ubahberita"){
        include 'form.php';
    }elseif($_GET['page']=="tambahslider"){
        include 'form.php';
    }elseif($_GET['page']=="ubahslider"){
        include 'form.php';
    }elseif ($_GET[""]==""){
        include 'box.php';
    }

?>