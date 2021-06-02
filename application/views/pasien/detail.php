<div id="page-content-wrapper">
	<div class="container mt-2">
		<h2>Detail Pasien</h2>
		<table class="table">
			<tr>
				<td>Kode Pasien</td><td>: <?php echo $patien->kode ?></td>
			</tr>
			<tr>
				<td>Nama</td><td>: <?php echo $patien->nama ?></td>
			</tr>
			<tr>
				<td>Gender</td><td>: <?php echo $patien->gender ?></td>
			</tr>
			<tr>	
				<td>Tempat Lahir</td><td>: <?php echo $patien->tmp_lahir ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td><td>: <?php echo $patien->tgl_lahir ?></td>
			</tr>
		</table>
	</div>
</div>