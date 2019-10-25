<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from pasien where id='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["pasien"]){
			mysql_query("update pasien set nopasien= '".$_POST["nopas"]."',tglregistrasi='".$_POST["tglreg"]."',namapas='".$_POST["nama"]."', jeniskelpas='".$_POST["jk"]."', almpas='".$_POST["alamat"]."',
				    tgllahirpas='".$_POST["tgllahir"]."', tglregistrasi='".$_POST["tglreg"]."',
				    telppas='".$_POST["telp"]."',  ruang='".$_POST["ruang"]."' where id='".$_GET["nmr"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=pasien'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil mengedit data!!</b>
			</div><center>";
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Silahkan Edit Data Pasien</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">No. Pasien</label>
							<div class="col-lg-4">
								<input type="text" name="nopas" value="<?php echo $editDb["nopasien"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Registrasi</label>
							<div class="col-lg-2">
							<input type="text" value="<?php echo $editDb["tglregistrasi"];?>" required name="tglreg" class="form-control" />	
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Pasien</label>
							<div class="col-lg-4">
								<input type="text" name="nama" value="<?php echo $editDb["namapas"];?>" required class="form-control" />
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
							<input type="text" value="<?php echo $editDb["tgllahirpas"];?>" required name="tgllahir" class="form-control" />	
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Telp/HP</label>
							<div class="col-lg-4">
								<input type="text" value="<?php echo $editDb["telppas"];?>" required name="telp" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" value="<?php echo $editDb["almpas"];?>" required name="alamat" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ruang</label>
							<div class="col-lg-4">
								<input type="text" value="<?php echo $editDb["ruang"];?>" required name="ruang" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>