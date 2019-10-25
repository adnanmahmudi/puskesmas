<title>Puskesmas Karangrayung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/custom.js"></script>
</head>
<body>
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
      
        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">              
                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero.jpg')">             
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>    <?php include_once("library/koneksi.php");
                $query = mysql_query("select * from tampilandepan where no=1");
                while ($data = mysql_fetch_array($query)){
                 echo $data['judul'] ; }?></h1>
                                    </header>
                                    <div class="entry-content mt-4">
                                        <p><?php include_once("library/koneksi.php");
                $query = mysql_query("select * from tampilandepan where no=1");
                while ($data = mysql_fetch_array($query)){
                 echo $data['isi'] ; }?></p>
                                    </div>
                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                    </footer>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1> <?php include_once("library/koneksi.php");
                $query = mysql_query("select * from tampilandepan where no=2");
                while ($data = mysql_fetch_array($query)){
                 echo $data['judul'] ; }?></h1>
                                    </header>
                                    <div class="entry-content mt-4">
                                        <p> <?php include_once("library/koneksi.php");
                $query = mysql_query("select * from tampilandepan where no=2");
                while ($data = mysql_fetch_array($query)){
                 echo $data['isi'] ; }?></p>
                                    </div>
                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1> <?php include_once("library/koneksi.php");
                $query = mysql_query("select * from tampilandepan where no=3");
                while ($data = mysql_fetch_array($query)){
                 echo $data['judul'] ; }?></h1>
                                    </header>
                                    <div class="entry-content mt-4">
                                        <p><?php include_once("library/koneksi.php");
                $query = mysql_query("select * from tampilandepan where no=3");
                while ($data = mysql_fetch_array($query)){
                 echo $data['isi'] ; }?></p>
                                    </div>
                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-wrap position-absolute w-100">
                <div class="swiper-pagination d-flex flex-row flex-md-column"></div>
            </div>
        </div>
    </header>
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
<?php}?>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>