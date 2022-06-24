<div class="container-fluid">
  <?php foreach ($usaha as $ush) : ?>
    <h3 class="card-title mt-3">Variasi produk dari toko <?php echo $ush->nama_usaha ?></h3>
  <?php endforeach; ?>
  <button class="btn btn-sm btn-success mt-3" data-toggle="modal" data-target="#tambah_promosi">
    <i class="fa fa-plus fa-sm"></i> Tambah Variasi Produk</button><br>
  <div class="row">
    
    <?php foreach ($variasi as $var) : ?>

      <div class="card mr-3 mt-3" style="width: 18rem; max-width: 49%; border-color: grey;">
        <img src="<?php echo base_url('/uploads/variasi/'.$var->foto) ?>" 
          class="card-img-top" alt="Foto <?php echo $var->foto ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $var->variasi_produk ?></h5>
						<p class="text-right">Rp. <?php echo $var->harga_variasi ?> </p>
            <?php echo anchor('login/hapus_variasi/'.$var->id, 
      '<div class="btn btn-danger btn-sm">Hapus</div>') ?>
          </div>
      </div>

    <?php endforeach; ?>
    
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_promosi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Variasi Produk</h5>
      </div>

      <form action="<?php echo base_url('login/tambah_variasi') ?>" method="POST" enctype="multipart/form-data">

        <div class="modal-body">
          <input type="hidden" name="id_promosi" value="<?php echo $id_usaha ?>">

          <div class="form-group">
            <label>Tambahkan Gambar/Foto</label>
            <input type="file" name="foto" accept="image/jpg, image/jpeg, image/png">
          </div>

          <div class="form-group">
            <label>Nama Variasi Produk</label>
            <input type="text" name="variasi_produk" class="form-control">
          </div>
        </div>
				
				<div class="form-group">
					<label>Harga Variasi Produk</label>
					<input type="text" name="harga_produk" class="form-control">
				</div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

      </form>
    </div>
  </div>
</div>
