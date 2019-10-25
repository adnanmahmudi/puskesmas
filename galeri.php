<!DOCTYPE html>
<html lang="en">
<head>
    <title>Puskesmas Karangrayung</title>
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="wnoth=device-wnoth, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation:"slide"
		})
	})
</script>
<style>
		* {
			margin:0;
			padding:0;
		}
		#wrapper-top{ 
			background:#fff;
			height:100px;
		}
		#wrapper-header{
			background:#f9f9f9; 
			border-top:1px solid #eee; 
			border-bottom:1px solid #eee;
			
		}
		#slider-container {
			padding : 29px 0 0 0;
			width : 940px;
			margin : 0px auto;
		}
		#wrapper-content{
			background:#fff;
			height:600px;
		}
		#wrapper-beforefooter{
			background:#f9f9f9; 
			border-top:1px solid #eee;
			height:350px;
		}
		#wrapper-footer{
			background:#2b2b2b;
			height:50px; 
		}
	</style>
</head>
<body class="single-page">
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                        </div>
                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li class="current-menu-item"><a href="index.php">Beranda</a></li>
                                <li><a href="pelayanan.php">Pelayanan</a></li>
                                <li><a href="galeri.php">Galeri</a></li>
                                <li><a href="berita.php">Berita</a></li>
                                <li><a href="tentangkami.php">Tentang Kami</a></li>
                                <li class="call-btn button gradient-bg mt-3 mt-md-0">
                                    <a class="d-flex justify-content-center align-items-center" href="index.php"><img src="images/emergency-call.png">+21098376</a>
                                </li>
                            </ul>
                        </nav>
                           </header>
                    </div>
                </div>           
            </div>
        </div>
       <div class="faq-stuff">
        <div class="container">
                <div class="col-10">
                    <h2>Galeri</h2>
                </div>                 
		<div id="slider-container">
			<div class="flexslider">
			  <ul class="slides">		
					<?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM galeri ORDER BY id ";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
		<li><?php	echo "<img src='paneladmin/admin/$pegawai[gambar]' height = '400'>";}?></li>		
				</ul>
			</div>
		</div>
	</div>
	</div>
	</div>
                </div>

               
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="footer-wnogets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a href="#"><img src="images/logo.png" alt=""></a></h2>

                            <p>Puskesmas Karangrayung siap melayani masyarakat dengan sepenuh hati</p>

                            <p class="copyright">
<script>document.write(new Date().getFullYear());</script> All rights reserved | Puskesmas Karangrayung<i class="fa fa-heart" aria-hnoden="true"></i>
</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>
                            <ul class="p-0 m-0">
                                <li><span>Alamat :</span>Puskesmas Karangrayung</li>
                                <li><span>No Telp:</span>+21098376</li>
                                <li><span>Email:</span>puskesmaskarangrayung@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-links">
                            <h2>Menu</h2>

                            <ul class="p-0 m-0">
                                <li><a href="index.php">Beranda</a></li>
                                <li><a href="pelayanan.php">Pelayanan</a></li>
                                <li><a href="galeri.php">Galeri</a></li>
                                <li><a href="berita.php">Berita</a></li>
                                <li><a href="tentangkami.php">Tentang Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>