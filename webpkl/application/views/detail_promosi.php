<div class="container-fluid">
	
	<?php foreach ($usaha as $ush) : ?>

		<div class="d-flex justify-content-center">
		<div class="card" style="width: 90%;">
		  <img src="<?php echo base_url('/uploads/'.$ush->foto) ?>" class="card-img-top" alt="Foto <?php echo $ush->nama_usaha ?>">
		  <div class="card-body">
		    <h3><h1 class="card-title"><b><i><?php echo $ush->nama_usaha ?></i></b></h1></h3>
		    <p class="card-text"><b>Deskripsi Usaha : </b><br> 
		    	<?php echo $ush->deskripsi ?></p>
		  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item"><b>Nama Pengiklan : </b><br>
		    <?php echo $ush->nama_pengiklan ?></li>
		    <li class="list-group-item"><b>Lokasi : </b><br>
		    <?php echo $ush->lokasi ?></li>
		    <li class="list-group-item"><b>Alamat Lengkap : </b><br>
		    <?php echo $ush->alamat ?></li>
		    <li class="list-group-item"><b>Whatsapp : </b><br>
		    <a href="https://api.whatsapp.com/send?phone=<?php echo $ush->no_whatsapp ?>&text=Hello%20<?php echo $ush->nama_usaha ?>%20apakah Anda mempunyai produk " 
		    	class="btn btn-primary">Klik Disini</a></li>
		    <li class="list-group-item"><b>Status Toko : </b><br>
		    <?php echo $ush->status ?></li>
		  </ul>
		  <div class="card-body">
		    <button class="btn btn-sm btn-success mt-3 mr-3" data-toggle="modal" data-target="#lihat_produk">
			Lihat Produk</button>
			<button class="btn btn-sm btn-success mt-3" data-toggle="modal" data-target="#lihat_penilaian">
			Lihat Penilaian</button>
		  </div>
		</div>
		</div>

	<?php endforeach; ?>

</div>
