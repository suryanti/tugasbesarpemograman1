<?php if($_GET['page']=="user"){ ?>
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <span><a class="btn btn-mini btn-success" href="index.php?page=tambahuser">Tambah</a></span>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel data user</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Id. User</th>
                  <th>Nama User</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_user");
                while($data = mysqli_fetch_array($sql)){
              ?>
                <tr class="gradeX">
                  <td><?php echo $i ?></td>
                  <td><?php echo $data['id_user'] ?></td>
                  <td><?php echo $data['nama_user'] ?></td>
                  <td><?php echo $data['password'] ?></td>
                  <td>
                        <a class="btn btn-mini btn-primary" href="index.php?page=ubahuser&id=<?php echo $data['id_user'] ?>">
                        Ubah</a> &nbsp;
                        <a class="btn btn-mini btn-danger" href="crud/user/delete.php?id=<?php echo $data['id_user'] ?>"
                        onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } ?>

<?php if($_GET['page']=="menu"){ ?>
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span8">
        <span><a class="btn btn-mini btn-success" href="index.php?page=tambahmenu">Tambah</a></span>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel data Menu</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Id. Menu</th>
                  <th>Nama Nama menu</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_menu");
                while($data = mysqli_fetch_array($sql)){
              ?>
                <tr class="gradeX">
                  <td><?php echo $i ?></td>
                  <td><?php echo $data['id_menu'] ?></td>
                  <td><?php echo $data['menu'] ?></td>
                  <td>
                        <a class="btn btn-mini btn-primary" href="index.php?page=ubahmenu&id=<?php echo $data['id_menu'] ?>">
                        Ubah</a> &nbsp;
                        <a class="btn btn-mini btn-danger" href="crud/menu/delete.php?id=<?php echo $data['id_menu'] ?>"
                        onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <span><a class="btn btn-mini btn-success" href="index.php?page=tambahdetailmenu">Tambah</a></span>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel detail Menu</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Id. Detail Menu</th>
                  <th>Nama menu</th>
                  <th>Detail menu</th>
                  <th>Slug menu</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_menu a, tb_menudetail b WHERE a.id_menu = b.id_menu");
                while($data = mysqli_fetch_array($sql)){
              ?>
                <tr class="gradeX">
                  <td><?php echo $i ?></td>
                  <td><?php echo $data['id_md'] ?></td>
                  <td><?php echo $data['menu'] ?></td>
                  <td><?php echo $data['isi_menu'] ?></td>
                  <td><?php echo $data['slug_menu'] ?></td>
                  <td>
                        <a class="btn btn-mini btn-primary" href="index.php?page=ubahdetailmenu&id=<?php echo $data['id_md'] ?>">
                        Ubah</a> &nbsp;
                        <a class="btn btn-mini btn-danger" href="crud/detailmenu/delete.php?id=<?php echo $data['id_md'] ?>"
                        onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } ?>

<?php if($_GET['page']=="guru"){ ?>
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <span><a class="btn btn-mini btn-success" href="index.php?page=tambahguru">Tambah</a></span>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel data guru dan karyawan</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Foto</th>
                  <th>Nama Guru/Karyawan</th>
                  <th>L/P</th>
                  <th>Tempat, Tanggal lahir</th>
                  <th>Status</th>
                  <th>Mengajar</th>
                  <th>Alamat</th>
                  <th>No. Hp</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_karyawan");
                while($data = mysqli_fetch_array($sql)){
              ?>
                <tr class="gradeX">
                  <td><?php echo $i ?></td>
                  <td><?php echo $data['nik'] ?></td>
                  <td><img src="../images/guru/<?php echo $data['foto'] ?>" alt="<?php echo $data['foto'] ?>" width=50px height=50px></td>
                  <td><?php echo $data['nama_karyawan'] ?></td>
                  <td><?php echo $data['jk'] ?></td>
                  <td><?php echo $data['tmp_lahir'].", ".date("d-M-Y", strtotime($data['tgl_lahir'])) ?></td>
                  <td><?php echo $data['status'] ?></td>
                  <td><?php echo $data['mengajar'] ?></td>
                  <td><?php echo $data['alamat'] ?></td>
                  <td><?php echo $data['no_hp'] ?></td>
                  <td>
                        <a class="btn btn-mini btn-primary" href="index.php?page=ubahguru&id=<?php echo $data['nik'] ?>">
                        Ubah</a> &nbsp;
                        <a class="btn btn-mini btn-danger" href="crud/guru/delete.php?id=<?php echo $data['nik'] ?>"
                        onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } ?>

<?php if($_GET['page']=="siswa"){ ?>
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <span><a class="btn btn-mini btn-success" href="index.php?page=tambahsiswa">Tambah</a></span>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel data siswa</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NIS</th>
                  <th>Foto</th>
                  <th>Nama Siswa</th>
                  <th>L/P</th>
                  <th>Tempat, Tanggal lahir</th>
                  <th>Alamat</th>
                  <th>Tahun Masuk</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
                while($data = mysqli_fetch_array($sql)){
              ?>
                <tr class="gradeX">
                  <td><?php echo $i ?></td>
                  <td><?php echo $data['nis'] ?></td>
                  <td><img src="../images/siswa/<?php echo $data['foto'] ?>" alt="<?php echo $data['foto'] ?>" width=50px height=50px></td>
                  <td><?php echo $data['nama_siswa'] ?></td>
                  <td><?php echo $data['jk'] ?></td>
                  <td><?php echo $data['tmp_lahir'].", ".date("d-M-Y", strtotime($data['tgl_lahir'])) ?></td>
                  <td><?php echo $data['alamat'] ?></td>
                  <td><?php echo $data['tahun_masuk'] ?></td>
                  <td>
                        <a class="btn btn-mini btn-primary" href="index.php?page=ubahsiswa&id=<?php echo $data['nis'] ?>">
                        Ubah</a> &nbsp;
                        <a class="btn btn-mini btn-danger" href="crud/siswa/delete.php?id=<?php echo $data['nis'] ?>"
                        onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } ?>

<?php if($_GET['page']=="kategoriberita"){ ?>
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <span><a class="btn btn-mini btn-success" href="index.php?page=tambahkategoriberita">Tambah</a></span>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel data kategori berita</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Id. Kategori</th>
                  <th>Nama Kategori</th>
                  <th>Slug</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_kategoripost");
                while($data = mysqli_fetch_array($sql)){
              ?>
                <tr class="gradeX">
                  <td><?php echo $i ?></td>
                  <td><?php echo $data['id_kat'] ?></td>
                  <td><?php echo $data['kategori_post'] ?></td>
                  <td><?php echo $data['slug_katpost'] ?></td>
                  <td>
                        <a class="btn btn-mini btn-primary" href="index.php?page=ubahkategoriberita&id=<?php echo $data['id_kat'] ?>">
                        Ubah</a> &nbsp;
                        <a class="btn btn-mini btn-danger" href="crud/kategoriberita/delete.php?id=<?php echo $data['id_kat'] ?>"
                        onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } ?>

<?php if($_GET['page']=="berita"){ ?>
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <span><a class="btn btn-mini btn-success" href="index.php?page=tambahberita">Tambah</a></span>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel data berita</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Id. Berita</th>
                  <th>Kategori</th>
                  <th>Tanggal</th>
                  <th>Judul</th>
                  <th>Slug</th>
                  <th>Header</th>
                  <th>Isi post</th>
                  <th>Diposting oleh</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_post a, tb_kategoripost b, tb_user c
                 WHERE a.id_kat=b.id_kat AND a.id_user=c.id_user");
                while($data = mysqli_fetch_array($sql)){
              ?>
                <tr class="gradeX">
                  <td><?php echo $i ?></td>
                  <td><?php echo $data['id_post'] ?></td>
                  <td><?php echo $data['kategori_post'] ?></td>
                  <td><?php echo date("d-M-Y", strtotime($data['tgl_post'])) ?></td>
                  <td><?php echo $data['judul'] ?></td>
                  <td><?php echo $data['slug_judul'] ?></td>
                  <td><img src="../images/berita/<?php echo $data['header'] ?>" alt="<?php echo $data['header'] ?>" width=50px height=50px></td>
                  <td><?php echo substr($data['isi_post'], 0, 100) ?></td>
                  <td><?php echo $data['nama_user'] ?></td>
                  <td>
                        <a class="btn btn-mini btn-primary" href="index.php?page=ubahberita&id=<?php echo $data['id_post'] ?>">
                        Ubah</a> &nbsp;
                        <a class="btn btn-mini btn-danger" href="crud/berita/delete.php?id=<?php echo $data['id_post'] ?>"
                        onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } ?>

<?php if($_GET['page']=="slider"){ ?>
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <span><a class="btn btn-mini btn-success" href="index.php?page=tambahslider">Tambah</a></span>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel data Slider (Maksimal 3)</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Slider</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_slider");
                while($data = mysqli_fetch_array($sql)){
              ?>
                <tr class="gradeX">
                  <td><?php echo $i ?></td>
                  <td><img src="../images/slider/<?php echo $data['slider'] ?>" alt="<?php echo $data['foto'] ?>" width=50px height=50px></td>
                  <td>
                        <a class="btn btn-mini btn-primary" href="index.php?page=ubahslider&id=<?php echo $data['id_slider'] ?>">
                        Ubah</a> &nbsp;
                        <a class="btn btn-mini btn-danger" href="crud/slider/delete.php?id=<?php echo $data['id_slider'] ?>"
                        onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } ?>