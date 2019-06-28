<!-- artikel -->

<section id="blog" class="container">
        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                    <?php
                         
                         $id = $_GET['id'];
                         $sql = mysqli_query($koneksi, "SELECT * FROM tb_post a, tb_user b, tb_kategoripost c WHERE a.id_user=b.id_user AND a.id_kat=c.id_kat AND id_post='$id' ");
                         while ($data = mysqli_fetch_array($sql)) {
                        ?>

                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo date("d-M-Y", strtotime($data['tgl-post'])) ?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?php echo $data['nama_user'] ?></a></span>
                                    <span><i class="fa fa-tags"></i><a href="#"><?php echo $data['kategori_post'] ?></a></span>
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="index.php?page=detail_berita&id=<?php echo $data['id_post'] ?>"><img class="img-responsive img-blog" src="images/berita/<?php echo $data['header'] ?>" width="100%" alt="<?php echo $data['header'] ?>" /></a>
                                <h2><a href="index.php?page=detail_berita&id=<?php echo $data['id_post'] ?>"><?php $data['judul'] ?></a></h2>
                                <h3><?php echo $data['isi_post'] ?></h3>
                            </div>
                        </div>    
                            <?php } ?>
                    </div><!--/.blog-item-->
                </div><!--/.col-md-8-->

                <?php include 'kategori.php' ?>
                
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->