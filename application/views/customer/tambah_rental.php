<div class="container">
	<div class="card" style="margin-top: 150px; margin-bottom: 100px">
		<div class="card-head">
			Form Rental Mobil
		</div>
		
		<div class="card-body">
			
			<?php foreach($detail as $dt) : ?>
				

				<form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">
					

					<div class="form-group">
						

						<div>
						<label>ID Mobil</label>
						<input type="text" class="form-control" name="id_mobil" value="<?php echo $dt->id_mobil ?>"readonly>
						</div>
						
						<div>
						<label>Harga Sewa/Hari</label>
						<input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
					</div>

					<div>
						<label>Denda</label>
						<input type="text" name="denda" class="form-control" value="<?php echo $dt->denda ?>" readonly>
					</div>

					<div>
						<label>Tanggal Rental</label>
						<input type="date" name="tanggal_rental" class="form-control" >
					</div>

					<div>
						<label>Tanggal Kembali</label>
						<input type="date" name="tanggal_kembali" class="form-control">
					</div>

					
					<button type="submit" class="btn btn-warning mt-4">Rental</button>

				


				</form>



			<?php endforeach; ?>
		</div>

	</div>
</div>