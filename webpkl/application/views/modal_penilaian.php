<!-- Modal Lihat Penilaian -->
<div class="modal fade" id="lihat_penilaian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lihat Penilaian</h5>
      </div>
      <div class="modal-body">
      	<?php foreach ($penilaian as $pnl) : ?>

    		<div class="form-group">
          <?php for ($i=0; $i < $pnl->jumlah ; $i++) { ?>
            <i class="far fa-star"></i>
          <?php } 
            echo '<b>',$pnl->nama,'</b><br>';
            echo $pnl->deskripsi_penilaian;
          ?>
    		</div>

      	<?php endforeach;
        echo "<hr>"; ?>

        <?php if($this->session->userdata('username')) { ?>
          <form action="<?php echo base_url('penilaian') ?>" method="POST">
              
              <div class="form-group row">
               <div class="col-md-9">
                <select class="form-control far fa-star" id="category_name" name="jumlah_rating">
                 <option selected="0" class="far fa-star" disabled="">Bintang Usaha</option>
                  <option value="1" class="far fa-star">
                    <?php for ($i = 0; $i < 1; $i++){ ?>
                      &#xf005;
                    <?php } ?>
                  </option>
                  <option value="2" class="far fa-star">
                    <?php for ($i = 0; $i < 2; $i++){ ?>
                      &#xf005;
                    <?php } ?>
                  </option>
                  <option value="3" class="far fa-star">
                    <?php for ($i = 0; $i < 3; $i++){ ?>
                      &#xf005;
                    <?php } ?>
                  </option>
                  <option value="4" class="far fa-star">
                    <?php for ($i = 0; $i < 4; $i++){ ?>
                      &#xf005;
                    <?php } ?>
                  </option>
                  <option value="5" class="far fa-star">
                    <?php for ($i = 0; $i < 5; $i++){ ?>
                      &#xf005;
                    <?php } ?>
                  </option>
                </select>
               </div>
              </div>
              <input type="hidden" name="id_login" value="<?php echo $this->session->userdata('id_login') ?>">

              <div class="form-group">
                <label>Ulasan Anda</label>
                <input type="text" name="ulasan" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Tambahkan</button>
          </form>
        <?php } else { 
          echo "<b>Ingin menambahkan ulasan?</b> ";
          echo "Silakan <i>Login<i> terlebih dahulu.";
        } ?>

      </div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
      	</div>
    </div>
  </div>
</div>