<section id="about-us">
        <div class="container">			
			<div class="skill-wrap clearfix">			
				<div class="center wow fadeInDown">
                    <h2>Data Guru</h2>
					<form class="col-md-4" role="form" method="POST">
                        <input type="text" name="cari" class="form-control search_box" autocomplete="off" placeholder="Cari nama guru">
                    </form>
                </div>
				</div>

                <!-- our-team -->
			<div class="team">
				<?php
					@$cari = $_POST['cari'];
					if(isset($cari)){
						echo '<p>Menampilkan hasil : '.$cari.'</p>';
					}
				?>
				<div class="row clearfix">
				<?php
					$halaman = 3;
					$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					if(!isset($cari)){
						$sql = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE status='guru' LIMIT $mulai, $halaman ");
						$jml = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE status='guru'");
					}else{
						$sql = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE status='guru' AND nama_karyawan LIKE '%".$cari."%' LIMIT $mulai, $halaman  ");
						$jml = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE status='guru' AND nama_karyawan LIKE '%".$cari."%'");
					}

					$total = mysqli_num_rows($jml);
					$pages = ceil($total/$halaman);
					
					while($data = mysqli_fetch_array($sql)){
				?>
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/guru/<?php echo $data['foto'] ?>" alt="<?php echo $data['foto'] ?>"></a>
								</div>
								<div class="media-body">
									<h4><?php echo $data['nama_karyawan'] ?></h4>
									<h5><?php echo $data['nik'] ?></h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#"><?php echo $data['mengajar'] ?></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>Alamat : <?php echo $data['alamat'] ?>.</p>
						</div>
					</div><!--/.col-lg-4 -->
						<?php } ?>
						<div class="row">
							<div class="col-md-12">
								
							<ul class="pagination pagination-lg">
							<?php for ($i=1; $i<=$pages ; $i++){ ?>
							<li><a href="?page=guru&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							
							<?php } ?>
							
							</ul>
							</div>
						</div>
				</div>	<!--/.row-->
			</div><!--section-->
		</div><!--/.container-->
</section><!--/about-us-->