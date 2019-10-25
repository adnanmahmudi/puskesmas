<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from ruang where id='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["pasien"]){
			mysql_query("update ruang set namaruang='".$_POST["nama"]."', kelas='".$_POST["kelas"]."', jmlkamar='".$_POST["jmlruang"]."', kamarisi='".$_POST["kamarisi"]."', kamarkosong='".$_POST["kamarkosong"]."' where id='".$_GET["nmr"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=ruang'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil mengedit data!!</b>
			</div><center>";
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Silahkan Edit Data Ruang</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Ruang</label>
							<div class="col-lg-4">
								<input type="text" name="nama" value="<?php echo $editDb["namaruang"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kelas</label>
							<div class="col-lg-2">
							<input type="text" value="<?php echo $editDb["kelas"];?>" required name="kelas" class="form-control" />	
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Isi Ruang</label>
							<div class="col-lg-4">
								<input type="text" name="jmlruang" value="<?php echo $editDb["jmlkamar"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kamar Isi</label>
							<div class="col-lg-2">
							<input type="text" value="<?php echo $editDb["kamarisi"];?>" required name="kamarisi" class="form-control" />	
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kamar Kosong</label>
							<div class="col-lg-4">
								<input type="text" value="<?php echo $editDb["kamarkosong"];?>" required name="kamarkosong" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>