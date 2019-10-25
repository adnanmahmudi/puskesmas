<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from tampilandepan where id='".$_GET["nmr"]."'");
$editDb = mysql_fetch_array($edit);
	if($_POST["simpan"]){
		$no=$_POST["no"];
		$judul=$_POST["judul"];
		$isi=$_POST["isi"];
	mysql_query("update tampilandepan set no='$no', judul='$judul', isi='$isi' where id='".$_GET["nmr"]."'") or die ("gagal update");
			echo "<script>alert('data telah di update');document.location.href='?menu=tampilandepan'</script>";
	}
?>
<script src="tinymce/tinymce.min.js"></script>

  <script>tinymce.init({ selector:'textarea' });</script>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit Tampilan Depan</b>
		<p style="margin-top:10px;">
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
							<label class="control-label col-lg-4">Judul</label>
							<div class="col-lg-4">
								<input type="text" name="judul" value="<?php echo $editDb["judul"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Isi</label>
							<div class="col-lg-4">
								<textarea class="form-control"  name="isi"><?php echo $editDb["isi"];?></textarea>
							</div>
							</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>
