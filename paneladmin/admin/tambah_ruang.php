<?php

	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
			mysql_query("insert into ruang set namaruang='".$_POST["namaruang"]."',kelas='".$_POST["kelas"].
			"', jmlkamar='".$_POST["jmlkamar"]."', kamarisi='".$_POST["kamarisi"]."', kamarkosong='".$_POST["kamarkosong"]."'");			
			echo "<meta http-equiv='refresh' content='0; url=?menu=ruang'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">
	<header>
		<h5>Tambah Ruang</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
   
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Ruang</label>
							<div class="col-lg-4">
								<input type="text" name="namaruang" autofocus required class="form-control" />
							</div>							
						</div>
						<div class="form-group">
						<label class="control-label col-lg-4">Kelas</label>
						<div class="col-lg-2">
						<input type="text" class="form-control"  name="kelas" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">isi Ruang</label>
							<div class="col-lg-4">
								<input type="text" required name="jmlkamar" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kamar Isi</label>
							<div class="col-lg-2">
								<input type="text" class="form-control" name="kamarisi" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kamar Kosong</label>
							<div class="col-lg-4">
								<input type="text" required name="kamarkosong" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" />
							&nbsp <input type="reset" value="Reset" class="btn btn-warning" onclick=self.history.back()>
						</div>

					</form>
	</div>
</div>