<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from dokter where id='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["dokter"]){
		$nama=$_POST["nama"];
$folder="gambar";
$tmp_name=$_FILES["image"]["tmp_name"];
$name=$folder."/".$_FILES["image"]["name"];
move_uploaded_file($tmp_name, $name);
if(empty($tmp_name)){
	mysql_query("update dokter set nip='".$_POST["nip"]."',
		nmdokter='".$_POST["nadok"]."',keterangan='".$_POST["keterangan"]."',
		almdokter='".$_POST["alamat"]."', telpdokter='".$_POST["nokom"]."' where id='".$_GET["nmr"]."'") or die ("gagal update");
                  echo "<script>alert('data telah di update');document.location.href='?menu=dokter'</script>";
	}elseif(!empty($tmp_name)){
		mysql_query("update dokter set nip='".$_POST["nip"]."',foto='$name',
		nmdokter='".$_POST["nadok"]."',keterangan='".$_POST["keterangan"]."',
		almdokter='".$_POST["alamat"]."', telpdokter='".$_POST["nokom"]."' where id='".$_GET["nmr"]."'") or die ("gagal update");
                  echo "<script>alert('data telah di update');document.location.href='?menu=dokter'</script>";
	}
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>POLIKLINIK [Edit Data Dokter]</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label col-lg-4">N I P</label>
							<div class="col-lg-4">
								<input type="text" name="nip" value="<?php echo $editDb["nip"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Gambar</label>
							<div class="col-lg-4">
								<input type="file" name="image"><br><?php echo "<img src='$editDb[foto]' width=80px >"?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Dokter</label>
							<div class="col-lg-4">
								<input type="text" name="nadok" value="<?php echo $editDb["nmdokter"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Poliklinik</label>
							<div class="col-lg-4">
								<input type="text" value="<?php echo $editDb["keterangan"];?>" required name="keterangan" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" value="<?php echo $editDb["almdokter"];?>" required name="alamat" class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Nomor Telp</label>
							<div class="col-lg-4">
								<input type="text" value="<?php echo $editDb["telpdokter"];?>" required name="nokom" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="dokter" value="Simpan" class="btn btn-primary" />
						</div>

					</form>
	</div>
</div>
<?php } ?>