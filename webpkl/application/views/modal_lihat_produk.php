<!-- Modal Lihat Produk -->
<div class="modal fade" id="lihat_produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lihat Produk</h5>
      </div>
      	<div class="modal-body">
      		<?php foreach ($variasi as $var) : ?>
            <div class="card" style="max-width: 100%;">
              <img src="<?php echo base_url('/uploads/variasi/'.$var->foto) ?>" 
              class="card-img-top" alt="Foto <?php echo $var->foto ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $var->variasi_produk ?></h5>
                <?php foreach ($no_tlp as $no) : ?>
                  <a href="https://api.whatsapp.com/send?phone=<?php echo $no->no_whatsapp ?>&text=Saya%20tertarik%20dengan%20produk%20Anda,%20yaitu%20<?php echo $var->variasi_produk ?>" 
                    class="btn btn-primary">Pesan Sekarang</a>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endforeach; ?>
      	</div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
      	</div>
    </div>
  </div>
</div>

