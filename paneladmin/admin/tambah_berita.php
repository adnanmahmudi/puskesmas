<?php
if ($_POST["simpan"]){
include_once("../library/koneksi.php");
$cek_no=mysql_num_rows(mysql_query("SELECT nourut FROM berita WHERE nourut='$_POST[nourut]'"));
if ($cek_no > 0){
echo "<script>window.alert('No yang anda masukkan sudah digunakan')</script>";
 echo "<meta http-equiv='refresh' content='0; url=?menu=tambah_berita'>";
}
else{
$id=$_POST["id"];
$nourut=$_POST["nourut"];
$judul=$_POST["judul"];
$deskripsi=$_POST["deskripsi"];
$isi=$_POST["isi"];
$folder="gambar";
$tmp_name=$_FILES["image"]["tmp_name"];
$name=$folder."/".$_FILES["image"]["name"];
move_uploaded_file($tmp_name, $name);
mysql_query("insert into berita values ('$id','$nourut','$judul','$deskripsi','$isi','$name')");
			 
			 
 echo"<script>alert('berhasil menambah');
document.location.href='?menu=berita'</script>\n";

}

}
?>
<script src="tinymce/tinymce.min.js"></script>

  <script>tinymce.init({ selector:'textarea' });</script>
<div class="box">
	<header>
		<h5>Tambah Gambar</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
   <div class="form-group">
							<label class="control-label col-lg-4">No Urut</label>
							<div class="col-lg-4">
								<input type="text" name="nourut" autofocus required class="form-control" placeholder="1-6" />
							</div>
							</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Judul Berita</label>
							<div class="col-lg-4">
								<input type="text" name="judul" autofocus required class="form-control" />
							</div>
							</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Deskripsi</label>
							<div class="col-lg-4">
								<textarea class="form-control" id="input" name="deskripsi" rows="3"></textarea>
							</div>
							</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Isi</label>
							<div class="col-lg-4">
								<textarea class="form-control" id="input" name="isi" rows="3"></textarea>
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