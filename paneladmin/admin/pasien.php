<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM pasien";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<a href="?menu=tambah_pasien" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Tambah Pasien</a><p>
<div class="panel panel-default">
	<div class="panel-heading">
		Daftar Pasien
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nomor Pasien</th>
						<th>Tgl. Reg</th>
						<th>Nama Pasien</th>
						<th>Tgl. Lahir</th>
						<th>J. Kelamin</th>
						<th>Telp/Hp</th>
						<th>Alamat</th>
						<th>Ruang</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<?php
				$pasienSql = "SELECT * FROM pasien ORDER BY nopasien DESC LIMIT $hal, $row";
				$pasienQry = mysql_query($pasienSql, $server)  or die ("Query pasien salah : ".mysql_error());
				$nomor  = 0; 
				while ($pasien = mysql_fetch_array($pasienQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						
						<td><?php echo $nomor;?></td>
						<td><?php echo $pasien['nopasien'];?></td>
						<td><?php echo $pasien['tglregistrasi'];?></td>
						<td><?php echo $pasien['namapas'];?></td>
						<td><?php echo $pasien['tgllahirpas'];?></td>
						<td><?php echo $pasien['jeniskelpas'];?></td>
						<td><?php echo $pasien['telppas'];?></td>
						<td><?php echo $pasien['almpas'];?></td>
						<td><?php echo $pasien['ruang'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_pasien&aksi=hapus&nmr=<?php echo $pasien['id']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 
						  <a href="?menu=edit_pasien&aksi=edit&nmr=<?php echo $pasien['id']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
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






