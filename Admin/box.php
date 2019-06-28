<div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
          <?php
          include '../koneksi.php';
          $sqluser = mysqli_query($koneksi, "SELECT * FROM tb_user");
          $rowuser = mysqli_num_rows($sqluser);

          $sqlmenu = mysqli_query($koneksi, "SELECT * FROM tb_menu");
          $rowmenu = mysqli_num_rows($sqlmenu);

          $sqlguru = mysqli_query($koneksi, "SELECT * FROM tb_karyawan");
          $rowguru = mysqli_num_rows($sqlguru);

          $sqlsiswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
          $rowsiswa = mysqli_num_rows($sqlsiswa);

          $sqlkatber = mysqli_query($koneksi, "SELECT * FROM tb_kategoripost");
          $rowkatber = mysqli_num_rows($sqlkatber);

          $sqlberita = mysqli_query($koneksi, "SELECT * FROM tb_post");
          $rowberita = mysqli_num_rows($sqlberita);

          ?>
        <li class="bg_lb"> <a href="index.php?page=user"> <i class="icon-dashboard"></i> <span class="label label-important"><?php echo $rowuser ?></span> User </a> </li>
        <li class="bg_lr span3"> <a href="index.php?page=menu"> <i class="icon-signal"></i> <span class="label label-important"><?php echo $rowmenu ?></span> Menu</a> </li>
        <li class="bg_ly span3"> <a href="index.php?page=guru"> <i class="icon-user"></i> <span class="label label-important"><?php echo $rowguru ?></span> Guru dan Karyawan</a> </li>
        <li class="bg_lb span3"> <a href="index.php?page=siswa"> <i class="icon-user"></i> <span class="label label-important"><?php echo $rowsiswa ?></span> Siswa</a> </li>
        <li class="bg_lg span3"> <a href="index.php?page=kategoripost"> <i class="icon-signal"></i> <span class="label label-important"><?php echo $rowkatber ?></span> Kategori Berita</a> </li>
        <li class="bg_lg span3"> <a href="index.php?page=berita"> <i class="icon-signal"></i> <span class="label label-important"><?php echo $rowberita ?></span> Berita</a> </li>

      </ul>
    </div>