<?php
	if($_POST["dokter"]){
			include_once("../library/koneksi.php");
$folder="gambar";
$tmp_name=$_FILES["image"]["tmp_name"];
$name=$folder."/".$_FILES["image"]["name"];
move_uploaded_file($tmp_name, $name);
			mysql_query("insert into dokter set nip='".$_POST["nip"]."',foto='$name',
						nmdokter='".$_POST["nadok"]."',keterangan='".$_POST["keterangan"]."', almdokter='".$_POST["alamat"]."', telpdokter='".$_POST["nokom"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=dokter'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["dokter"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">
	<header>
		<h5>Tambah Dokter</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
   
						<div class="form-group">
							<label class="control-label col-lg-4">N I P</label>
							<div class="col-lg-4">
								<input type="text" name="nip" autofocus required class="form-control" />
							</div>
							</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Foto</label>
							<div class="col-lg-4">
								<input type="file"  name="image"  />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Dokter</label>
							<div class="col-lg-4">
								<input type="text" required name="nadok" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Poliklinik</label>
							<div class="col-lg-4">
								<input type="text" required name="keterangan" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" required name="alamat" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nomor Telp</label>
							<div class="col-lg-4">
								<input type="text" required name="nokom" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="dokter" value="Simpan" class="btn btn-primary" />
							&nbsp <input type="reset" value="Reset" class="btn btn-warning" onclick=self.history.back()>
						</div>

					</form>
	</div>
</div>