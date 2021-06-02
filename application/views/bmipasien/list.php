<div id="page-content-wrapper">
	<div class="container mt-2">
		<h2>List BMI Pasien</h2>
		<table class="table table-bordered">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Berat Badan</th>
				<th>Tinggi Badan</th>
				<th>BMI</th>
				<th>Status</th>
				<th>Catatan</th>
				<th>ID</th>
				<th>Action</th>
			</tr>
			<!-- menampilkan data dengan foreach -->
			<?php
				$nomor=1;
			 	foreach($bmipatiens as $bmipatien) : 
			?>
			<tr>
				<td><?php echo $nomor?></td>
				<td><?php echo $bmipatien->tanggal ?></td>
				<td><?php echo $bmipatien->berat ?></td>
				<td><?php echo $bmipatien->tinggi ?></td>
				<td><?php echo $bmipatien->bmi ?></td>
				<td><?php echo $bmipatien->status_bmi ?></td>
				<td><?php echo $bmipatien->catatan ?></td>
				<td><?php echo $bmipatien->pasien_id ?></td>
				<td>
					<a href="<?php echo "detail/$bmipatien->id" ?>">
						Detail Pasien		
					</a>
				</td>
			</tr>
			<?php
				$nomor++;
				endforeach;
			?>
		</table>
	</div>
</div>
