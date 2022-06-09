<div class="container-fluid">
	<p class="h1 text-muted mt-3">Edit Promosi</p>

	<?php foreach ($usaha as $ush) : ?>

		<form method="POST" action="<?php echo base_url('login/update') ?>" enctype="multipart/form-data">
			<input type="hidden" name="id_promosi" value="<?php echo $ush->id_promosi ?>">
			<input type="hidden" name="id_pengiklan" value="<?php echo $ush->id_pengiklan ?>">
			<input type="hidden" name="status" value="<?php echo $ush->status ?>">

      		<div class="form-group">
      			<label>Nama Usaha</label>
      			<input type="text" name="nama_usaha" class="form-control" value="<?php echo $ush->nama_usaha ?>">
      		</div>

      		<div class="form-group">
      			<label>Foto Usaha</label><br>
      			<div class="card mx-2 my-2" style="max-width: 22%;">
			      <div class="row g-0" style="height:100%">
			        <div class="col-md-12" style="display:block; margin: auto;">
			          <img src="<?php echo base_url('/uploads/'.$ush->foto) ?>" 
			          class="img-fluid rounded" alt="Foto <?php echo $ush->nama_usaha ?>">
			        </div>
			      </div>
			    </div>
      			<input type="file" name="foto" accept="image/jpg, image/jpeg, image/png">
      		</div>

      		<div class="form-group">
      			<label>Nama Pengiklan</label>
      			<input type="text" name="nama_pengiklan" class="form-control" value="<?php echo $ush->nama_pengiklan ?>">
      		</div>
      		<div class="form-group">
      			<label>deskripsi</label>
      			<input type="text" name="deskripsi" class="form-control" value="<?php echo $ush->deskripsi ?>">
      		</div>
      		<div class="form-group">
      			<label>Alamat Lengkap</label>
      			<input type="text" name="alamat" class="form-control" value="<?php echo $ush->alamat ?>">
      		</div>
      		<div class="form-group">
      			<label>No Whatsapp</label>
      			<input type="text" name="no_whatsapp" class="form-control" value="<?php echo $ush->no_whatsapp ?>">
      		</div>

      		<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	<?php endforeach; ?>
</div>