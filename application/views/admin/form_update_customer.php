<div class="main-content">
	<div class="section">
		<div class="section-header">
			<h1>Form Update Customer</h1>
		</div>
	</div>

	<?php foreach ($customer as $cs) : ?>


	<form method="POST" action="<?php echo base_url('admin/data_customer/update_customer_aksi') ?>">
		
		<div class="card">
		<div class="card-body">
		<div class="row">
		<div class="col-md-6">
		<div class="form-group">
			<label>Nama</label>
			<input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
			<input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>">
			<?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Username</label>
			<input type="text" id="disableinput" name="username" class="form-control" value="<?php echo $cs->username ?>" >
			<?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
			<?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Gender</label>
			<select name="gender" class="form-control">
				<option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?></option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
			<?php echo form_error('gender','<div class="text-small text-danger">','</div>') ?>
		</div>

		</div>

		<div class="col-md-6">
		<div class="form-group">
			<label>No. Telepon</label>
			<input type="text" name="no_telepon" class="form-control" value="<?php echo $cs->no_telepon ?>">
			<?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
		</div>

		<div class="form-group">
			<label>No. KTP</label>
			<input type="text" name="no_ktp" class="form-control" value="<?php echo $cs->no_ktp ?>">
			<?php echo form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>
		</div>

		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" value="<?php echo $cs->password ?>">
			<?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
		</div>

		<button type="submit" class="btn btn-primary mt-4">Simpan</button>
		<button type="reset" class="btn btn-danger mt-4">Reset</button>

		</div>

	</form>
<?php endforeach; ?>
</div>
</div>
</div>
</div>