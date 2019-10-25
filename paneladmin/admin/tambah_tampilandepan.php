<?php
if ($_POST["simpan"]){
include_once("../library/koneksi.php");

$id=$_POST["id"];
$no=$_POST["no"];
$judul=$_POST["judul"];
$isi=$_POST["isi"];
$simpan= "insert into tampilandepan values ('$id','$no','$judul','$isi')";
$hasil =mysql_query ($simpan);
if ($hasil)
{
echo"<script>alert('berhasil menambah');
document.location.href='?menu=tampilandepan'</script>\n";
}
}
?>
<script src="tinymce/tinymce.min.js"></script>

  <script>tinymce.init({ selector:'textarea' });</script>
<div class="box">
	<header>
		<h5>Tambah Tampilan Depan</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
							<label class="control-label col-lg-4">N o</label>
							<div class="col-lg-4">
								<select name="no" class="form-control">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Judul Tampilan</label>
							<div class="col-lg-4">
								<input type="text" name="judul" autofocus required class="form-control" />
							</div>
							</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Isi</label>
							<div class="col-lg-4">
								<textarea class="form-control" id="input" name="isi" rows="3"></textarea>
							</div>
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary" />
							&nbsp <input type="reset" value="Reset" class="btn btn-warning" onclick=self.history.back()>
						</div>

					</form>
	</div>
</div>