<section id="about-us">
        <div class="container">			
			<div class="skill-wrap clearfix">			
				<div class="center wow fadeInDown">
					<h2>Data Siswa</h2>
                    <form class="col-md-4" role="form" method="POST">
                        <input type="text" name="cari" class="form-control search_box" autocomplete="off" placeholder="Cari nama siswa">
                    </form>
                </div>
                </div>
                
                <table class="table table-responsive table-hover">
                <?php
                    @$cari = $_POST['cari'];
                    if(isset($cari)){
                        echo '<p>Menampilkan hasil : '.$cari.'</p>';
                    }
                ?>
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Foto</th>
                            <th>Nama Siswa</th>
                            <th>L/P</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Tahun Masuk</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                        $halaman = 3;
                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                        if(!isset($cari)){
                            $sql = mysqli_query($koneksi, "SELECT * FROM tb_siswa LIMIT $mulai, $halaman");
                            $jml = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
                        }else{
                            $sql = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nama_siswa LIKE '%".$cari."%' LIMIT $mulai, $halaman");
                            $jml = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nama_siswa LIKE '%".$cari."%' ");
                        }

                        $total = mysqli_num_rows($jml);
                        $pages = ceil($total/$halaman);
                        
                        while($data = mysqli_fetch_array($sql)){
                    ?>
                        <tr>
                            <td><?php echo $data['nis'] ?></td>
                            <td><img src="images/siswa/<?php echo $data['foto'] ?>" alt="<?php echo $data['foto'] ?>" width=50px height=50px></td>
                            <td><?php echo $data['nama_siswa'] ?></td>
                            <td><?php echo $data['jk'] ?></td>
                            <td><?php echo $data['tmp_lahir'].', '.date('d-M-Y', strtotime($data['tgl_lahir'])) ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td><?php echo $data['tahun_masuk'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="row">
                        <div class="col-md-12">
                            
                        <ul class="pagination pagination-lg">
                          <?php for ($i=1; $i<=$pages ; $i++){ ?>
                          <li><a href="?page=siswa&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                         
                          <?php } ?>
                         
                        </ul>
                        </div>
                    </div>
			</div><!--section-->
		</div><!--/.container-->
</section><!--/about-us-->