<div class="main-content">
	<div class="section">
		<div class="section-header">
			<h1>Detail Customer</h1>
		</div>
	

	<?php foreach ($detail as $dt) : ?>

		<div class="card">
      	<div class="card-body">

		<div class="row">
		<div class="col-md-6">
			
		
		<div class="form-group">
			<label>Nama</label>
			<input type="hidden" name="id_customer" value="<?php echo $dt->id_customer ?>">
			<input type="text" name="nama" class="form-control" value="<?php echo $dt->nama ?>" disabled>
			
		</div>

		<div class="form-group">
			<label>Username</label>
			<input type="text" id="disableinput" name="username" class="form-control" value="<?php echo $dt->username ?>" disabled>
			
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" value="<?php echo $dt->alamat ?>"disabled>
			
		</div>


		<div class="form-group">
			<label>Gender</label>
			<input type="text" name="gender" class="form-control" value="<?php echo $dt->gender ?>"disabled>
		
		</div>

		</div>
		


		<div class="col-md-6">

		<div class="form-group">
			<label>No. Telepon</label>
			<input type="text" name="no_telepon" class="form-control" value="<?php echo $dt->no_telepon ?>"disabled>
			
		</div>

		<div class="form-group">
			<label>No. KTP</label>
			<input type="text" name="no_ktp" class="form-control" value="<?php echo $dt->no_ktp ?>"disabled>
			
		</div>

		<div class="form-group">
			<label>Password</label>
			<input type="text" name="password" class="form-control" value="<?php echo $dt->password ?>"disabled>
		</div>

		<div>
			<a class="btn btn btn-primary mt-4" href="<?php echo base_url('admin/data_customer') ?>">Kembali</a>
			<a class="btn btn btn-danger mt-4" href="<?php echo base_url('admin/data_customer/update_customer/'.$dt->id_customer) ?>">Update</a>
		</div>

		</div>


		</div>

		
		

		
		</div>

	</div>
	</div>
<?php endforeach; ?>
</div>