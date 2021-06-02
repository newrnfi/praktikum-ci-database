<div id="page-content-wrapper">
	<div class="container mt-2">
		<h2>Detail Pasien</h2>
		<table class="table">
			<tr>
				<td>Tanggal</td><td>: <?php echo $bmipatien->tanggal ?></td>
			</tr>
			<tr>
				<td>Berat Badan</td><td>: <?php echo $bmipatien->berat ?></td>
			</tr>
			<tr>
				<td>Tinggi Badan</td><td>: <?php echo $bmipatien->tinggi ?></td>
			</tr>
			<tr>	
				<td>BMI</td><td>: <?php echo $bmipatien->bmi ?></td>
			</tr>
			<tr>
				<td>Status</td><td>: <?php echo $bmipatien->status_bmi ?></td>
			</tr>
		</table>
	</div>
</div>