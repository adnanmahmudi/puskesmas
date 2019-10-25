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
                                <li><a href="Pelayanan.php">Pelayanan</a></li>
                                <li><a href="Galeri.php">Galeri</a></li>
                                <li><a href="Berita.php">Berita</a></li>
                                <li><a href="tentangkami.php">Tentang Kami</a></li>
                                <li class="call-btn button gradient-bg mt-3 mt-md-0">
                                    <a class="d-flex justify-content-center align-items-center" href="index.php"><img src="images/emergency-call.png">+21098376</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="header-img" src="images/contact-bg.png" alt="">
    </header>

    <div class="contact-page-short-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="contact-info h-100">
                        <h2 class="d-flex align-items-center">Info Kontak</h2>

                        <ul class="p-0 m-0">
                            <li><span>Alamat:</span>jln. purwodadi</li>
                            <li><span>No Telp:</span>+21098376</li>
                            <li><span>Email:</span>pksmkarangrayung@gmail.com/li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-lg-0">
                    <div class="opening-hours h-100">
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

                <div class="col-12 col-md-4 mt-5 mt-lg-0">
                    <div class="emergency-box h-100">
                         <h2 class="d-flex align-items-center">Telp Darurat</h2>

                        <div class="call-btn text-center">
                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="images/emergency-call.png"> +21098376</a>
                        </div>

                        <p>Silahkan menghubungi kami jika ada keadaan darurat kami akan segara merespon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php

	if($_POST["simpan"]){
			include_once("library/koneksi.php");
			mysql_query("insert into komentar set nama='".$_POST["nama"]."',email='".$_POST["email"].
			"', judul='".$_POST["judul"]."', isi='".$_POST["isi"]."'");			
			echo"<script>alert('Pesan Anda Telah Dikirim');
document.location.href='index.php'</script>\n";
	}else if(isset($_POST["simpan"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal Mengirim Pesan!!</b>
			</div><center>";
	}
?>
<form action="" method="post" class="form-horizontal">
                    <h2>Kritik dan Saran</h2>
                </div>

                <div class="col-12  col-md-4">
                    <input name="nama" type="text" placeholder="Masukkan Nama">
                </div>

                <div class="col-12 col-md-4">
                    <input name="email" type="email" placeholder="Masukkan E-mail">
                </div>

                <div class="col-12 col-md-4">
                    <input type="text" name="judul" placeholder="Masukkan Judul">
                </div>

                <div class="col-12">
                    <textarea name="isi" rows="12" cols="80" placeholder="Silahkan Tulis Pesan Anda"></textarea>
                </div>

                <div class="col-12">
                    <input type="submit" name="simpan" value="Send Message" class="button gradient-bg">
                </div>
</form>
            </div>
        </div>
    </div>
     <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a href="#"><img src="images/logo.png" alt=""></a></h2>
                            <p>Puskesmas Karangrayung siap melayani masyarakat dengan sepenuh hati</p>
                            <p class="copyright">
<script>document.write(new Date().getFullYear());</script> All rights reserved | Puskesmas Karangrayung<i class="fa fa-heart" aria-hidden="true"></i>
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