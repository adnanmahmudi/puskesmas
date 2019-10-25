     	<div id="content">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
						<h1>SELAMAT DATANG ADMIN</h1>
                    </div>
                </div>
                <hr/>
                 <div class="row">
                    <div class="col-lg-12">
						<?php
						if($_GET["menu"]){
							include_once("load.php");
						}else{
							echo "<div class='col-lg-12'>
										<div class='panel panel-default'>
											<div class='panel-heading'>
												Peraturan Admin
											</div>
												<div class='tab-content'>
													<div class='tab-pane fade in active' id='home'>
													<center>
														<table><tr><td align='left' width='500px'>														
															<tr><td align='left'>1.Merubah Isi Data Yang Ada</td></tr>
															<tr><td align='left'>2.Harus Melakukan Cek Data Setiap Hari</td></tr>
															<tr><td align='left'>3.Harus Selalu Mengingat Username dan Password admin</a></td></tr>															
															</table>
													</div>								
											</div>
										</div>
									</div>";
						}
						?>
					</div>
                </div>
                <hr />
            </div>
        </div>
        
          <div id="center">
            <ul id="menu" class="collapse">
                <li class="panel active"><a href="index.php" style="text-align:right">Content Menu <i class="icon-home"></i> </a></li>
				<li><a href="?menu=tampilandepan" style="text-align:right">Tampilan Depan<i class="icon-paper-clip"> </i></a></li>
				<li><a href="?menu=berita" style="text-align:right">Berita <i class="icon-paper-clip"> </i></a></li>
                <li><a href="?menu=pasien" style="text-align:right">Pasien <i class="icon-paper-clip"> </i></a></li>
                <li><a href="?menu=dokter" style="text-align:right">Dokter<i class="icon-paper-clip"></i></a></li>
                <li><a href="?menu=jadwal" style="text-align:right"> Jadwal Praktek <i class="icon-paper-clip"></i></a></li>
                <li><a href="?menu=pegawai" style="text-align:right">Pegawai <i class="icon-paper-clip"></i></a></li>
				<li><a href="?menu=galeri" style="text-align:right">Galeri <i class="icon-paper-clip"></i></a></li>
				<li><a href="?menu=alurpelayanan" style="text-align:right">Alur Pelayanan<i class="icon-paper-clip"></i></a></li>
				<li><a href="?menu=ruang" style="text-align:right">Ruang<i class="icon-paper-clip"></i></a></li>
				<li><a href="?menu=komentar" style="text-align:right">Komentar<i class="icon-paper-clip"></i></a></li>
				<li><a href="?menu=gantipassword" style="text-align:right">Ganti Password<i class="icon-paper-clip"></i></a></li>
            </ul>
        </div>