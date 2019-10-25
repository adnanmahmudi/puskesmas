<?php

	if($_POST["pegawai"]){
			include_once("../library/koneksi.php");
			mysql_query("insert into pegawai set nip='".$_POST["nip"]."',namapeg='".$_POST["napeg"]."', jnskelpeg='".$_POST["jk"]."', almpeg='".$_POST["alamat"]."', tgllhrpeg='".$_POST["tgllhr"]."', telppeg='".$_POST["nokom"]."'");			
			echo "<meta http-equiv='refresh' content='0; url=?menu=pegawai'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["pegawai"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">
	<header>
		<h5>Tambah Data Pegawai</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
   
						<div class="form-group">
							<label class="control-label col-lg-4">N I P</label>
							<div class="col-lg-4">
								<input type="text" name="nip" autofocus required class="form-control" />
							</div>
							
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">N a m a</label>
							<div class="col-lg-4">
								<input type="text" required name="napeg" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jenis Kelamin</label>
							<div class="col-lg-2">
								<select name="jk" class="form-control">
									<option value="Pria">Pria</option>
									<option value="Wanita">Wanita</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Lahir</label>
							<div class="col-lg-2">
								<input type="date" class="form-control"  name="tgllhr" /> Tanggal/Bulan/Tahun
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nomor Telp/Hp</label>
							<div class="col-lg-4">
								<input type="text" required name="nokom" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" required name="alamat" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pegawai" value="Simpan" class="btn btn-primary" />
							&nbsp <input type="reset" value="Reset" class="btn btn-warning" onclick=self.history.back()>
						</div>

					</form>
	</div>
</div>