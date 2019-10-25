<?php
if ($_POST["simpan"]){
include_once("../library/koneksi.php");

$id=$_POST["id"];
$nama=$_POST["nama"];
$folder="gambar";
$tmp_name=$_FILES["image"]["tmp_name"];
$name=$folder."/".$_FILES["image"]["name"];
move_uploaded_file($tmp_name, $name);
$simpan= "insert into galeri values ('$id','$nama','$name')";
$hasil =mysql_query ($simpan);
if ($hasil)
{
echo"<script>alert('berhasil menambah');
document.location.href='?menu=galeri'</script>\n";
}
}
?>
<div class="box">
	<header>
		<h5>Tambah Gambar</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
   
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Gambar</label>
							<div class="col-lg-4">
								<input type="text" name="nama" autofocus required class="form-control" />
							</div>
							</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Gambar</label>
							<div class="col-lg-4">
								<input type="file"  name="image"  />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary" />
							&nbsp <input type="reset" value="Reset" class="btn btn-warning" onclick=self.history.back()>
						</div>

					</form>
	</div>
</div>