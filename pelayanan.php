<!DOCTYPE html>
<html lang="en">
<head>
    <title>Puskesmas Karangrayung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body class="single-page">
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-tabs">
                    <div class="tabs">
                        <ul class="tabs-nav d-flex flex-wrap">
                            <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM pelayanan where no = 1";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_1"><?php echo $pegawai['nama'];}?></li>
                             <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM pelayanan where no = 2";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_2"><?php echo $pegawai['nama'];}?></li>
                             <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM pelayanan where no = 3";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_3"><?php echo $pegawai['nama'];}?></li>
                             <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM pelayanan where no = 4";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_4"><?php echo $pegawai['nama'];}?></li>
                             <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM pelayanan where no = 5";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_5"><?php echo $pegawai['nama'];}?></li>
                        </ul>

                        <div class="tabs-container">
                            <div id="tab_1" class="tab-content">
                                                              <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM pelayanan where no = 1";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                               <?php echo "<img src='paneladmin/admin/$pegawai[gambar]' width=400 height = 100>";?>
                                <p><?php echo $pegawai['isi'];}?></p>
                            </div>
                            <div id="tab_2" class="tab-content">
                                      <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM pelayanan where no = 2";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                               <?php echo "<img src='paneladmin/admin/$pegawai[gambar]'width=400 height = 100 >";?>
                                <p><?php echo $pegawai['isi'];}?></p>
                            </div>

                            <div id="tab_3" class="tab-content">
                                      <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM pelayanan where no = 3";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                               <?php echo "<img src='paneladmin/admin/$pegawai[gambar]' width=400px >";?>
                                <p><?php echo $pegawai['isi'];}?></p>
                            </div>

                            <div id="tab_4" class="tab-content">
                                     <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM pelayanan where no = 4";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                               <?php echo "<img src='paneladmin/admin/$pegawai[gambar]' width=400px >";?>

                                 <p><?php echo $pegawai['isi'];}?></p>
                            </div>


                            <div id="tab_5" class="tab-content">
                                     <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM pelayanan where no = 5";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                               <?php echo "<img src='paneladmin/admin/$pegawai[gambar]' width=400px >";?>
                                <p><?php echo $pegawai['isi'];}?></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="homepage-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Jam Buka</h2>
                        <ul class="p-0 m-0">
                               <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM jadwal ORDER BY id";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query jadwal salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                            <li><?php echo $pegawai['haripraktek'];?><span><?php echo $pegawai['jampraktek'];}?></span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Informasi Ruang Kosong</h2>

                        <ul class="p-0 m-0">
                               <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM ruang ORDER BY id";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                            <li><?php echo $pegawai['namaruang'];?><span><?php echo $pegawai['kelas'];?><span><?php echo $pegawai['kamarkosong'];}?></span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                   <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Informasi Poliklinik dan Dokter</h2>

                        <ul class="p-0 m-0">
                               <?php
include_once("library/koneksi.php");?>
			<?php	$pegawaiSql = "SELECT * FROM dokter ORDER BY id";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query galeri salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;?>
                            <li><?php echo $pegawai['keterangan'];?><span><?php echo $pegawai['nmdokter'];}?></span></li>
                        </ul>
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