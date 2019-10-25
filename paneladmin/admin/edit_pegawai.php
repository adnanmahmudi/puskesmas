<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from pegawai where id='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["pegawai"]){
			//include_once("../library/koneksi.php");
			mysql_query("update pegawai set nip='".$_POST["nip"]."', namapeg='".$_POST["nama"]."', almpeg='".$_POST["alamat"]."', tgllhrpeg='".$_POST["tgllahir"]."', telppeg='".$_POST["nokom"]."', jnskelpeg='".$_POST["jk"]."' where id='".$_GET["nmr"]."'");
			
			echo "<meta http-equiv='refresh' content='0; url=?menu=pegawai'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil mengedit data!!</b>
			</div><center>";
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>POLIKLINIK [Edit Data Pegawai]</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">N I P</label>
							<div class="col-lg-4">
								<input type="text" name="nip" value="<?php echo $editDb["nip"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Pegawai</label>
							<div class="col-lg-4">
								<input type="text" name="nama" value="<?php echo $editDb["namapeg"];?>" required class="form-control" />
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
							<input type="text" value="<?php echo $editDb["tgllhrpeg"];?>" required name="tgllahir" class="form-control" />	
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Telp/HP</label>
							<div class="col-lg-4">
								<input type="text" value="<?php echo $editDb["telppeg"];?>" required name="nokom" class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" value="<?php echo $editDb["almpeg"];?>" required name="alamat" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pegawai" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>