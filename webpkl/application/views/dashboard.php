<div class="container-fluid">
  <div class="row">
    
    <?php foreach ($usaha as $ush) : ?>

    <div class="card mx-2 my-2" style="max-width: 49%;">
      <div class="row g-0" style="height:100%">
        <div class="col-md-6" style="display:block; margin: auto;">
          <img src="<?php echo base_url('/uploads/'.$ush->foto) ?>" 
          class="img-fluid rounded" alt="Foto <?php echo $ush->nama_usaha ?>">
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h3 class="card-title"><?php echo $ush->nama_usaha ?></h3>
            <h5><b><i><?php echo $ush->nama_pengiklan ?></i></b></h5>
            <span class="badge bg-warning text-dark"><b><?php echo $ush->alamat ?></b></span><br>
            <?php echo anchor('guest/detail/'.$ush->id_promosi, '<div class="btn btn-primary">Detail</i></div>') ?>
          </div>
        </div>
      </div>
    </div>

    <?php endforeach; ?>
    
  </div>
</div>

