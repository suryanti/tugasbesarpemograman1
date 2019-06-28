<aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                                <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->

                    <div class="widget categories">
                        <h3>Kategori Berita</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM tb_kategoripost");
                                    while($data = mysqli_fetch_array($sql)){
                                ?>
                                    <li><a href="index.php?page=&kategori=<?php echo $data['id_kat'] ?>"><?php echo $data['kategori_post'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
    			</aside>  