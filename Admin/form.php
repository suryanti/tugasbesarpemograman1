<?php if($_GET['page']=='tambahuser'){ ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah User</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/user/create.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">ID. USER :</label>
              <div class="controls">
                <input type="text" class="span11" name="iduser" placeholder="ID USER" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama User :</label>
              <div class="controls">
                <input type="text" class="span11" name="namauser" placeholder="Nama User" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password"  class="span11" name="pass" placeholder="Password" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>

<?php } ?>

<?php if($_GET['page']=='ubahuser'){ 
  $id = $_GET['id'];
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_user where id_user = '$id'");
  while ($data = mysqli_fetch_array($sql)){
  ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Ubah User</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/user/update.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">ID. USER :</label>
              <div class="controls">
                <input type="text" readonly class="span11" value="<?php echo $data['id_user'] ?>" name="iduser" placeholder="ID USER" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama User :</label>
              <div class="controls">
                <input type="text" class="span11" value="<?php echo $data['nama_user'] ?>" name="namauser" placeholder="Nama User" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password" autocomplete="off" class="span11" name="pass" placeholder="Password" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>

<?php }} ?>

<?php if($_GET['page']=='tambahmenu'){ ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Menu</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/menu/create.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Menu :</label>
              <div class="controls">
                <input type="text" name="menu" class="span11" placeholder="Nama menu" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php } ?>

<?php if($_GET['page']=='ubahmenu'){ 
  $id = $_GET['id'];
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_menu WHERE id_menu = '$id' ");

  while($data = mysqli_fetch_array($sql)){
  ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Menu</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/menu/update.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Menu :</label>
              <div class="controls">
                <input type="hidden" name="id_menu" value="<?php echo $data['id_menu'] ?>">
                <input type="text" class="span11" name="menu" value="<?php echo $data['menu'] ?>" placeholder="Nama menu" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php }} ?>

<?php if($_GET['page']=='tambahdetailmenu'){ ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span10">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Menu</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/detailmenu/create.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Menu :</label>
              <div class="controls">
                <select name="menu" required>
                  <?php
                    $sql = mysqli_query($koneksi, "select * from tb_menu");
                    while($menu = mysqli_fetch_array($sql)){
                  ?>
                  <option value="<?php echo $menu['id_menu'] ?>"><?php echo $menu['menu'] ?></option>
                    <?php } ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Detail Menu :</label>
              <div class="controls">
                <textarea class="textarea_editor span10" name="isi_menu"  rows="6" placeholder="Enter text ..."></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Slug menu :</label>
              <div class="controls">
                <input type="text" name="slug" class="span11" placeholder="Slug menu" required />
              </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php } ?>

<?php if($_GET['page']=='ubahdetailmenu'){ 
  
  $id = $_GET['id'];
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_menudetail a, tb_menu b WHERE a.id_menu=b.id_menu AND id_md = '$id' ");

  while($data = mysqli_fetch_array($sql)){
  
  ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span10">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Menu</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/detailmenu/update.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Menu :</label>
              <div class="controls">
                <input name="id_md" type="hidden" value="<?php echo $id ?>">
                <select name="menu" required>
                <option value="<?php echo $data['id_menu'] ?>"><?php echo $data['menu'] ?> </option>
                  <?php
                    $sql = mysqli_query($koneksi, "select * from tb_menu");
                    while($menu = mysqli_fetch_array($sql)){
                  ?>
                  <option value="<?php echo $menu['id_menu'] ?>"><?php echo $menu['menu'] ?></option>
                    <?php } ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Detail Menu :</label>
              <div class="controls">
                <textarea class="textarea_editor span10" name="isi_menu"  rows="6" placeholder="Enter text ..."><?php echo $data['isi_menu'] ?></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Slug menu :</label>
              <div class="controls">
                <input type="text" name="slug_menu" value="<?php echo $data['slug_menu'] ?>" class="span11" placeholder="Slug menu" required />
              </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php }} ?>

<?php if($_GET['page']=='tambahguru'){ ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span10">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Guru</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/guru/create.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">NIK :</label>
              <div class="controls">
                <input type="text" name="nik" class="span11" placeholder="NIK" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">foto :</label>
              <div class="controls">
                <input type="file" name="foto" class="span11" placeholder="foto" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Guru/Karyawan :</label>
              <div class="controls">
                <input type="text" name="nama" class="span11" placeholder="Nama Guru/Karyawan" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jenis Kelamin :</label>
              <div class="controls">
                <select required name="jk">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tempat Lahir :</label>
              <div class="controls">
                <input type="text" name="tmp_lahir" class="span11" placeholder="Tempat Lahir" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal Lahir :</label>
              <div class="controls">
                <input type="date" name="tgl_lahir" class="span11" placeholder="Tanggal Lahir" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                <select required name="status">
                  <option value="ketua">Ketua</option>
                  <option value="guru">Guru</option>
                  <option value="staf">Staf</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Mengajar :</label>
              <div class="controls">
                <input type="text" name="mengajar" class="span11" placeholder="Mengajar" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat :</label>
              <div class="controls">
                <input type="text" name="alamat" class="span11" placeholder="Alamat" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">No. Hp :</label>
              <div class="controls">
                <input type="text" name="no_hp" class="span11" placeholder="No. Hp" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php } ?>

<?php if($_GET['page']=='ubahguru'){ 

    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "select * from tb_karyawan where nik='$id'");
    while($data = mysqli_fetch_array($sql)){

  ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span10">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Ubah Guru</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/guru/update.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">NIK :</label>
              <div class="controls">
                <input type="text" name="nik" readonly class="span11" value="<?php echo $data['nik'] ?>" placeholder="NIK" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">foto :</label>
              <div class="controls">
                <input type="file" name="foto" class="span11" placeholder="foto" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Guru/Karyawan :</label>
              <div class="controls">
                <input type="text" name="nama" class="span11" value="<?php echo $data['nama_karyawan'] ?>" placeholder="Nama Guru/Karyawan" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jenis Kelamin :</label>
              <div class="controls">
                <select required name="jk">
                  <option value="<?php echo $data['jk'] ?>">
                    <?php
                      $jk = "";
                      if( $data['jk'] == "L"){
                        $jk = "Laki-laki";
                      } else{
                        $jk = "Perempuan";
                      }
                      echo $jk;
                    ?>
                  </option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tempat Lahir :</label>
              <div class="controls">
                <input type="text" name="tmp_lahir" value="<?php echo $data['tmp_lahir'] ?>" class="span11" placeholder="Tempat Lahir" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal Lahir :</label>
              <div class="controls">
                <input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>" class="span11" placeholder="Tanggal Lahir" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                <select required name="status">
                  <option value="<?php echo $data['status'] ?>"><?php echo $data['status'] ?></option>
                  <option value="ketua">Ketua</option>
                  <option value="guru">Guru</option>
                  <option value="staf">Staf</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Mengajar :</label>
              <div class="controls">
                <input type="text" name="mengajar" value="<?php echo $data['mengajar'] ?>" class="span11" placeholder="Mengajar" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat :</label>
              <div class="controls">
                <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="span11" placeholder="Alamat" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">No. Hp :</label>
              <div class="controls">
                <input type="text" name="no_hp" value="<?php echo $data['no_hp'] ?>" class="span11" placeholder="No. Hp" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php }} ?>

<?php if($_GET['page']=='tambahsiswa'){ ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span10">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Siswa</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/siswa/create.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">NIS :</label>
              <div class="controls">
                <input type="text" name="nis" class="span11" placeholder="NIS" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">foto :</label>
              <div class="controls">
                <input type="file" name="foto" class="span11" placeholder="foto" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Siswa :</label>
              <div class="controls">
                <input type="text" name="nama" class="span11" placeholder="Nama Siswa" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jenis Kelamin :</label>
              <div class="controls">
                <select required name="jk">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tempat Lahir :</label>
              <div class="controls">
                <input type="text" name="tmp_lahir" class="span11" placeholder="Tempat Lahir" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal Lahir :</label>
              <div class="controls">
                <input type="date" name="tgl_lahir" class="span11" placeholder="Tanggal Lahir" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat :</label>
              <div class="controls">
                <input type="text" name="alamat" class="span11" placeholder="Alamat" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tahun Masuk :</label>
              <div class="controls">
                <input type="text" name="thn_masuk" class="span11" placeholder="Tahun Masuk" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php } ?>

<?php if($_GET['page']=='ubahsiswa'){ 
  
  $id = $_GET['id'];
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis='$id'");
  while($data=mysqli_fetch_array($sql)){
  
  ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span10">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Ubah Siswa</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/siswa/update.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">NIS :</label>
              <div class="controls">
                <input type="text" name="nis" readonly value="<?php echo $data['nis'] ?>" class="span11" placeholder="NIS" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">foto :</label>
              <div class="controls">
                <input type="file" name="foto" class="span11" placeholder="foto" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Siswa :</label>
              <div class="controls">
                <input type="text" name="nama" value="<?php echo $data['nama_siswa'] ?>" class="span11" placeholder="Nama Siswa" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jenis Kelamin :</label>
              <div class="controls">
                <select required name="jk">
                <option value="<?php echo $data['jk'] ?>">
                  <?php  
                    $jk="";
                    if($data['jk']=="L"){
                      $jk = "Laki-laki";
                    }else{
                      $jk = "Perempuan";
                    }
                    echo $jk;
                  ?>
                </option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tempat Lahir :</label>
              <div class="controls">
                <input type="text" name="tmp_lahir" value="<?php echo $data['tmp_lahir'] ?>" class="span11" placeholder="Tempat Lahir" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal Lahir :</label>
              <div class="controls">
                <input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>" class="span11" placeholder="Tanggal Lahir" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat :</label>
              <div class="controls">
                <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="span11" placeholder="Alamat" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tahun Masuk :</label>
              <div class="controls">
                <input type="text" name="thn_masuk" value="<?php echo $data['tahun_masuk'] ?>" class="span11" placeholder="Tahun Masuk" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php }} ?>

<?php if($_GET['page']=='tambahkategoriberita'){ ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Kategori Berita</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/kategoriberita/create.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Kategori :</label>
              <div class="controls">
                <input type="text" name="kategori" class="span11" placeholder="Nama Kategori" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php } ?>

<?php if($_GET['page']=='ubahkategoriberita'){ 
  
  $id = $_GET['id'];
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_kategoripost WHERE id_kat='$id'");
  while($data = mysqli_fetch_array($sql)){
  
  ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Ubah Kategori Berita</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/kategoriberita/update.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Kategori :</label>
              <div class="controls">
                <input type="hidden" name="id" value="<?php echo $data['id_kat'] ?>">
                <input type="text" name="kategori" value="<?php echo $data['kategori_post'] ?>" class="span11" placeholder="Nama Kategori" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php }} ?>

<?php if($_GET['page']=='tambahberita'){ ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Berita</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/berita/create.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Kategori :</label>
              <div class="controls">
                <select required name="kategori">
                  <?php
                    $sql = mysqli_query($koneksi, "select * from tb_kategoripost");
                    while($kategori = mysqli_fetch_array($sql)){
                  ?>
                  <option value="<?php echo $kategori['id_kat'] ?>"><?php echo $kategori['kategori_post'] ?></option>
                    <?php } ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Judul Berita :</label>
              <div class="controls">
                <input type="text" name="judul" class="span10" required placeholder="Judul Berita">
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Tanggal :</label>
              <div class="controls">
                <input type="text" name="tanggal" class="span10" required readonly placeholder="Tanggal" value="<?php echo date('d-M-Y') ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Header (foto) :</label>
              <div class="controls">
                <input type="file" name="foto" class="span10" required placeholder="Judul Berita">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Isi berita :</label>
              <div class="controls">
                <textarea class="textarea_editor span10" name="berita" rows="10" placeholder="Enter text ..."></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Dibuat oleh :</label>
              <div class="controls">
                <input type="text" class="span10" name="id_admin" required readonly placeholder="User" value="<?php echo $_SESSION['adminid'] ?>">
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php } ?>

<?php if($_GET['page']=='ubahberita'){ 
  
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_post a, tb_kategoripost b WHERE a.id_kat=b.id_kat AND id_post='$id' ");
    while($data = mysqli_fetch_array($sql)){
  
  ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Berita</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/berita/update.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Kategori :</label>
              <div class="controls">
                <select required name="kategori">
                  <option value="<?php echo $data['id_kat'] ?>"><?php echo $data['kategori_post'] ?></option>
                  <?php
                    $sql = mysqli_query($koneksi, "select * from tb_kategoripost");
                    while($kategori = mysqli_fetch_array($sql)){
                  ?>
                  <option value="<?php echo $kategori['id_kat'] ?>"><?php echo $kategori['kategori_post'] ?></option>
                    <?php } ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Judul Berita :</label>
              <div class="controls">
                <input type="text" name="judul" value="<?php echo $data['judul'] ?>" class="span10" required placeholder="Judul Berita">
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Tanggal :</label>
              <div class="controls">
                <input type="text" name="tanggal" class="span10" required readonly placeholder="Tanggal" value="<?php echo date('d-M-Y') ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Header (foto) :</label>
              <div class="controls">
                <input type="file" name="foto" class="span10" required placeholder="Judul Berita">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Isi berita :</label>
              <div class="controls">
                <textarea class="textarea_editor span10" name="berita" rows="10" placeholder="Enter text ..."><?php echo $data['isi_post'] ?></textarea>
              </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $data['id_post'] ?>">
            <div class="control-group">
              <label class="control-label">Dibuat oleh :</label>
              <div class="controls">
                <input type="text" class="span10" name="id_admin" required readonly placeholder="User" value="<?php echo $_SESSION['adminid'] ?>">
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php }} ?>

<?php if($_GET['page']=='tambahslider'){ ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Slider</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/slider/create.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Slider (Foto) :</label>
              <div class="controls">
                <input type="file" name="foto" class="span11" placeholder="Nama Kategori" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php } ?>

<?php if($_GET['page']=='ubahslider'){ 
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_slider WHERE id_slider='$id' ");
    while($data = mysqli_fetch_array($sql)){
  ?>
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Ubah Slider</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="crud/slider/update.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Slider (Foto) :</label>
              <div class="controls">
                <input type="hidden" name="id" value="<?php echo $data['id_slider'] ?>">
                <input type="file" name="foto" class="span11" placeholder="Nama Kategori" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<?php }} ?>