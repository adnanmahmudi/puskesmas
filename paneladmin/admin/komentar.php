<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM komentar";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<div class="panel panel-default">
	<div class="panel-heading">
		Daftar Kritik dan Saran
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Judul</th>
						<th>Isi</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<?php
				$poliklinikSql = "SELECT * FROM komentar ORDER BY id DESC LIMIT $hal, $row";
				$poliklinikQry = mysql_query($poliklinikSql, $server)  or die ("Query poliklinik salah : ".mysql_error());
				$nomor  = 0; 
				while ($poliklinik = mysql_fetch_array($poliklinikQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						
						<td><?php echo $nomor;?></td>
						<td><?php echo $poliklinik['nama'];?></td>
						<td><?php echo $poliklinik['email'];?></td>
						<td><?php echo $poliklinik['judul'];?></td>
						<td><?php echo $poliklinik['isi'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_komentar&aksi=hapus&nmr=<?php echo $poliklinik['id']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 
						  </div>
						</td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="9" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=poliklinik&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>






