<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from jadwal where id='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["pasien"]){
			mysql_query("update jadwal set namadokter='".$_POST["nama"]."', poliklinik='".$_POST["poli"]."', ruang='".$_POST["ruang"]."', haripraktek='".$_POST["hari"]."', jampraktek='".$_POST["jam"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=jadwal'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil mengedit data!!</b>
			</div><center>";
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Silahkan Edit Jadwal</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Dokter</label>
							<div class="col-lg-4">
								<input type="text" name="nama" value="<?php echo $editDb["namadokter"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Poliklinik</label>
							<div class="col-lg-2">
							<input type="text" value="<?php echo $editDb["poliklinik"];?>" required name="poli" class="form-control" />	
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ruang Praktek</label>
							<div class="col-lg-4">
								<input type="text" name="ruang" value="<?php echo $editDb["ruang"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Hari Praktek</label>
							<div class="col-lg-2">
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
							<div class="col-lg-2">
							<input type="text" value="<?php echo $editDb["jampraktek"];?>" required name="jam" class="form-control" />	
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>