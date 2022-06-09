<div class="container-fluid">
	<p class="h1 text-muted mt-3">Kelola Promosi</p>
	<button class="btn btn-sm btn-primary mt-3" data-toggle="modal" data-target="#tambah_promosi">
		<i class="fa fa-plus fa-sm"></i> Tambah Usaha</button>

	<table class="table table-striped table-bordered text-center table-responsive-md my-2">
		<thead>
			<tr>
				<th>No</td>
				<th>Nama Usaha</th>
				<th>Nama Pengiklan</th>
				<th>Alamat</th>
				<th>No Whatsapp</td>
				<th>Status</th>
				<th>Persetujuan</th>
				<th>Tambahkan<br>Variasi</th>
				<th colspan="2">Ubah<br>Status</th>
				<th colspan="3">Aksi</th>
			</tr>
		</thead>

		<?php 
		$no = 1;
		foreach ($usaha as $ush) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $ush->nama_usaha ?></td>
			<td><?php echo $ush->nama_pengiklan ?></td>
			<td><?php echo $ush->alamat ?></td>
			<td><?php echo $ush->no_whatsapp ?></td>
			<td><?php echo $ush->status ?></td>
			<td><?php echo $ush->persetujuan ?></td>
			<td><?php echo anchor('login/kelola_variasi/'.$ush->id_promosi, 
			'<div class="btn btn-primary btn-sm"><i class="fas fa-cart-plus"></i></div>') ?></td>

			<td><?php echo anchor('login/status_buka/'.$ush->id_promosi, 
			'<div class="btn btn-info btn-sm">Buka</i></div>') ?></td>

			<td><?php echo anchor('login/status_tutup/'.$ush->id_promosi, 
			'<div class="btn btn-secondary btn-sm">Tutup</i></div>') ?></td>

			<td><?php echo anchor('login/detail/'.$ush->id_promosi, 
			'<div class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>

			<td><?php echo anchor('login/edit/'.$ush->id_promosi, 
			'<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?></td>

			<td><?php echo anchor('login/hapus/'.$ush->id_promosi, 
			'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
		</tr>

		<?php endforeach ?>
	</table>
</div>