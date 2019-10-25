<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from galeri where id='".$_GET["nmr"]."'");
$editDb = mysql_fetch_array($edit);
	if($_POST["simpan"]){
		$nama=$_POST["nama"];
$folder="gambar";
$tmp_name=$_FILES["image"]["tmp_name"];
$name=$folder."/".$_FILES["image"]["name"];
move_uploaded_file($tmp_name, $name);
if(empty($tmp_name)){
	mysql_query("update galeri set nama='$nama' where id='".$_GET["nmr"]."'") or die ("gagal update");
			echo "<script>alert('data telah di update');document.location.href='?menu=galeri'</script>";
}elseif(!empty($tmp_name)){
	mysql_query("update galeri set nama='$nama', gambar='$name' where id='".$_GET["nmr"]."'") or die ("gagal update");
			echo "<script>alert('data telah di update');document.location.href='?menu=galeri'</script>";
	}
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit Gambar</b>
		<p style="margin-top:10px;">
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
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>
