<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Sekolah Oemah Codinger</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Beranda</a></li>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                                $sql = mysqli_query($koneksi, "select * from tb_menu a, tb_menudetail b where a.id_menu=b.id_menu");
                                while($menu = mysqli_fetch_array($sql)){
                            ?>
                          <li><a href="index.php?page=<?php echo $menu['slug_menu'] ?>"><?php echo $menu['menu'] ?></a></li>
                          <?php } ?>
                        </ul>
                      </li>
                      <li><a href="index.php?page=guru">Guru</a></li>
                      <li><a href="index.php?page=siswa">Siswa</a></li>                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header>