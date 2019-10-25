<?php
if ($_POST["simpan"]){
include_once("../library/koneksi.php");

$r=mysql_fetch_array(mysql_query("SELECT * FROM login where username='admin'"));

$pass_lama=$_POST[pass_lama];
$pass_baru=$_POST[pass_baru];

if (empty($_POST[pass_baru]) OR empty($_POST[pass_lama]) OR empty($_POST[pass_ulangi])){
  echo "<p align=center>Anda harus mengisikan semua data pada form Ganti Password.<br />"; 
  echo "<a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a></p>";
}
else{ 
if ($pass_lama==$r[password]){
  if ($_POST[pass_baru]==$_POST[pass_ulangi]){
    mysql_query("UPDATE login SET password = '$pass_baru'");
	  echo "<script>alert('Update Password Berhasil'); window.location = 'index.php'</script>";
  }
  else{
	echo "<script>alert('Password baru yang anda masukkan tidak sama'); window.location = '?menu=gantipassword'</script>";
  }
}
else{
echo "<script>alert('Password Lama anda salah'); window.location = '?menu=gantipassword'</script>";
}
}
}
?>

<div class="panel panel-default">
	<div class="panel-heading">
		Ganti Password
	</div>
	<div class="panel-body">
		<div class="table-responsive">
		<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
   
						<div class="form-group">
							<label class="control-label col-lg-4">Masukkan Password Lama</label>
							<div class="col-lg-4">
								<input type="text" name="pass_lama" autofocus required class="form-control" />
							</div>
							</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Masukkan Password baru</label>
							<div class="col-lg-4">
								<input type="text" name="pass_baru" autofocus required class="form-control" />
							</div>
							</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ulangi Password baru</label>
							<div class="col-lg-4">
								<input type="text" name="pass_ulangi" autofocus required class="form-control" />
							</div>
							</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary" />
							&nbsp <input type="reset" value="Reset" class="btn btn-warning" onclick=self.history.back()>
						</div>

					</form>
		</div>
	</div>
</div>






