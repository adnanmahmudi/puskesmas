<?php

	if($_POST["jadwal"]){
			include_once("../library/koneksi.php");
			mysql_query("insert into jadwal set namadokter='".$_POST["nama"]."',poliklinik='".$_POST["poli"].
			"',ruang='".$_POST["ruang"]."', haripraktek='".$_POST["hari"]."', jampraktek='".$_POST["jam"]."'");			
			echo "<meta http-equiv='refresh' content='0; url=?menu=jadwal'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["jadwal"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">
	<header>
		<h5>Tambah Jadwal</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Dokter</label>
							<div class="col-lg-4">
								<input type="text" required name="nama" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Poliklinik</label>
							<div class="col-lg-4">
								<input type="text" required name="poli" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ruang Praktek</label>
							<div class="col-lg-4">
								<input type="text" required name="ruang" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Hari Praktek</label>
							<div class="col-lg-4">
								<select name="hari" class="form-control">
									<option value="Senin">Senin</option>
									<option value="Selasa">Selasa</option>
									<option value="Rabu">Rabu</option>
									<option value="Kamis">Kamis</option>
									<option value="Jumat">Jumat</option>
									<option value="Sabtu">Sabtu</option>
									<option value="Minggu">Minggu</option>
								</select>
							</div>
						</div>
							<div class="form-group">
							<label class="control-label col-lg-4">Jam Praktek</label>
							<div class="col-lg-4">
								<input type="text" required name="jam" class="form-control" />
							</div>
						</div>
	
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="jadwal" value="Simpan" class="btn btn-primary" />
							&nbsp <input type="reset" value="Reset" class="btn btn-warning" onclick=self.history.back()>
						</div>

					</form>
	</div>
</div>