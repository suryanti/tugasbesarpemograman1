<section id="about-us">
        <div class="container">			
			<div class="skill-wrap clearfix">			
				<div class="center wow fadeInDown">
					<h2>Struktur Organisasi</h2>
					<?php
						$sql = mysqli_query($koneksi, "SELECT * FROM tb_menudetail WHERE id_menu='3'");
						while($data = mysqli_fetch_array($sql)){
					?>
					<p class="lead"><?php echo $data['isi_menu'] ?></p>
						<?php } ?>
					</div>
			</div><!--section-->
		</div><!--/.container-->
</section><!--/about-us-->