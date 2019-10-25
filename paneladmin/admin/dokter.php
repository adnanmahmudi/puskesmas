<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM dokter";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<a href="?menu=tambah_dokter" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Tambah Dokter</a><p>
<div class="panel panel-default">
	<div class="panel-heading">
		Daftar Dokter
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>N I P</th>
						<th>Foto</th>
						<th>Nama Dokter</th>
						<th>Keterangan</th>
						<th>Alamat Dokter</th>
						<th>Telp Dokter</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<?php
				$dokterSql = "SELECT * FROM dokter ORDER BY nip DESC LIMIT $hal, $row";
				$dokterQry = mysql_query($dokterSql, $server)  or die ("Query dokter salah : ".mysql_error());
				$nomor  = 0; 
				while ($dokter = mysql_fetch_array($dokterQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						
						<td><?php echo $nomor;?></td>
						<td><?php echo $dokter['nip'];?></td>
						<td><?php echo "<img src='$dokter[foto]' width=80px >"?></td>
						<td><?php echo $dokter['nmdokter'];?></td>
						<td><?php echo $dokter['keterangan'];?></td>
						<td><?php echo $dokter['almdokter'];?></td>
						<td><?php echo $dokter['telpdokter'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_dokter&aksi=hapus&nmr=<?php echo $dokter['id']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 
						  <a href="?menu=edit_dokter&aksi=edit&nmr=<?php echo $dokter['id']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
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
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=dokter&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>






