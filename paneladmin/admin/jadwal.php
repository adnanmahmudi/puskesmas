<?php
include_once("../library/koneksi.php");
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM jadwal";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<a href="?menu=tambah_jadwal" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Tambah Jadwal</a><p>
<div class="panel panel-default">
	<div class="panel-heading">
		Jadwal Praktek
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Dokter</th>
						<th>Poliklinik</th>
						<th>Ruang</th>
						<th>Hari Praktek</th>
						<th>Jam Praktek</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<?php
				$jadwalSql = "SELECT * FROM jadwal ORDER BY id DESC LIMIT $hal, $row";
				$jadwalQry = mysql_query($jadwalSql, $server)  or die ("Query jadwal salah : ".mysql_error());
				$nomor  = 0; 
				while ($jadwal = mysql_fetch_array($jadwalQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						
						<td><?php echo $nomor;?></td>
						<td><?php echo $jadwal['namadokter'];?></td>
						<td><?php echo $jadwal['poliklinik'];?></td>
						<td><?php echo $jadwal['ruang'];?></td>
						<td><?php echo $jadwal['haripraktek'];?></td>
						<td><?php echo $jadwal['jampraktek'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_jadwal&aksi=hapus&nmr=<?php echo $jadwal['id']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 
						  <a href="?menu=edit_jadwal&aksi=edit&nmr=<?php echo $jadwal['id']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
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
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=pasien&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>






