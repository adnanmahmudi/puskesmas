<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from pelayanan where id='".$_GET["nmr"]."'");
$editDb = mysql_fetch_array($edit);
	if($_POST["simpan"]){
		$nama=$_POST["nama"];
		$isi=$_POST["isi"];
$folder="gambar";
$tmp_name=$_FILES["image"]["tmp_name"];
$name=$folder."/".$_FILES["image"]["name"];
move_uploaded_file($tmp_name, $name);
if(empty($tmp_name)){
	mysql_query("update pelayanan set nama='$nama',isi='$isi' where id='".$_GET["nmr"]."'") or die ("gagal update");
			echo "<script>alert('data telah di update');document.location.href='?menu=alurpelayanan'</script>";
}elseif(!empty($tmp_name)){
	mysql_query("update pelayanan set nama='$nama', gambar='$name',isi='$isi' where id='".$_GET["nmr"]."'") or die ("gagal update");
			echo "<script>alert('data telah di update');document.location.href='?menu=alurpelayanan'</script>";
	}
	}
?>
<script src="tinymce/tinymce.min.js"></script>

  <script>tinymce.init({ selector:'textarea' });</script>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit Alur Pelayanan</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
							<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label col-lg-4">N a m a</label>
							<div class="col-lg-4">
								<input type="text" name="nama" value="<?php echo $editDb["nama"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-4"></label>
							<div class="col-lg-4">
								
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Gambar</label>
							<div class="col-lg-4">
								<input type="file" name="image"><br><?php echo "<img src='$editDb[gambar]' width=80px >"?>
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
