<div class="container-fluid">
  <div class="row">
    
    <?php foreach ($pencarian as $cari) : ?>

    <div class="card mx-2 my-2" style="max-width: 49%;">
      <div class="row g-0" style="height:100%">
        <div class="col-md-6" style="display:block; margin: auto;">
          <img src="<?php echo base_url('/uploads/'.$cari->foto) ?>" 
          class="img-fluid rounded" alt="Foto <?php echo $cari->nama_usaha ?>">
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h3 class="card-title"><?php echo $cari->nama_usaha ?></h3>
            <h5><b><i><?php echo $cari->nama_pengiklan ?></i></b></h5>
            <span class="badge bg-warning text-dark"><b><?php echo $cari->alamat ?></b></span><br>
            <?php echo anchor('admin/detail/'.$cari->id_promosi, '<div class="btn btn-primary">Detail</i></div>') ?>
          </div>
        </div>
      </div>
    </div>

    <?php endforeach; ?>
    
  </div>
</div>

