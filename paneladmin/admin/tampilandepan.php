<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM tampilandepan";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<a href="?menu=tambah_tampilandepan" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i>Tambah Tampilan Depan</a><p>
<div class="panel panel-default">
	<div class="panel-heading">
		Tampilan Depan (*Hanya 3 Tampilan)
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Judul Tampilan</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<?php
				$pegawaiSql = "SELECT * FROM tampilandepan ORDER BY id DESC LIMIT $hal, $row";
				$pegawaiQry = mysql_query($pegawaiSql, $server)  or die ("Query tampilandepan salah : ".mysql_error());
				$nomor  = 0; 
				while ($pegawai = mysql_fetch_array($pegawaiQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						
						<td><?php echo $nomor;?></td>
						<td><?php echo $pegawai['judul'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_tampilandepan&aksi=hapus&nmr=<?php echo $pegawai['id']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 
						  <a href="?menu=edit_tampilandepan&aksi=edit&nmr=<?php echo $pegawai['id']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="8" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=pegawai&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>






