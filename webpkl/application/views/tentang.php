<div class="container-fluid">
  <p class="h1 text-muted mt-3">Tentang</p>
  <p class="h3 text-warning mt-3">Jika Terkendala Masalah pada Web ini, klik tombol dibawah ini untuk menyampaikan masalah ke Admin</p>
  <div class="row">
  <?php foreach ($admin as $adm) : ?>

    <div class="card mx-2 my-2" style="width: 20%;">
      <img src="<?php echo base_url('/uploads/foto_admin/'.$adm->foto) ?>" 
      class="card-img-top" alt="Foto <?php echo $adm->nama ?>" style="max-width: 95%; display:block; margin: auto;">
      <div class="card-body">
        <h3 class="card-title"><p class="text-info"><?php echo $adm->nama ?></p></h3>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo $adm->email ?>&su=webPKL%20Terkendala&body=Username_anda:%0AJelaskan%20Masalah%20Anda%20Dibawah%20Ini:%0A" 
          class="btn btn-primary">Chat Admin</a>
      </div>
    </div>

  <?php endforeach; ?>
  </div>
</div>