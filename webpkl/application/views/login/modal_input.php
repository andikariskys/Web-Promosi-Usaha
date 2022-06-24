<!-- Modal -->
<div class="modal fade" id="tambah_promosi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Promosi</h5>
      </div>

      <form action="<?php echo base_url('login/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">

      	<div class="modal-body">
      		
					<input type="hidden" name="id_pengiklan" value="<?php echo $this->session->userdata('id_login') ?>">

      		<div class="form-group">
      			<label>Nama Usaha</label>
      			<input type="text" name="nama_usaha" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Tambahkan Gambar/Foto</label>
      			<input type="file" name="foto" accept="image/jpg, image/jpeg, image/png">
      		</div>
      		
      		<input type="hidden" name="nama_pengiklan" value="<?php echo $this->session->userdata('nama') ?>">

      		<div class="form-group">
      			<label>Deskripsi</label>
      			<input type="text" name="deskripsi" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Alamat Lengkap</label>
      			<input type="text" name="alamat" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>No Whatsapp (gunakan "62" bukan "0", cth. 6281202xxxx)</label>
      			<input type="text" name="no_whatsapp" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Status Toko/Usaha</label><br>
      			<input type="radio" name="status" value="buka"> Buka
      			<input type="radio" name="status" value="Tutup"> Tutup
      		</div>
      	</div>

      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>
      	</div>

      </form>
    </div>
  </div>
</div>
