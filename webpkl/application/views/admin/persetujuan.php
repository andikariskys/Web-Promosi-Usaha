<div class="container-fluid">
	<p class="h1 text-muted mt-3">Persetujuan</p>
	
	<table class="table table-striped table-bordered text-center table-responsive-md my-2">
		<thead>
			<tr>
				<th>No</td>
				<th>Nama Pengiklan</th>
				<th>Nama Usaha</th>
				<th>Status</th>
				<th>Persetujuan</th>
				<th colspan="3">Aksi</th>
			</tr>
		</thead>

		<?php 
		$no = 1;
		foreach ($usaha as $ush) : ?>

		<tr>
			
			<td><?php echo $no++ ?></td>
			<td><?php echo $ush->nama ?></td>
			<td><?php echo $ush->nama_usaha ?></td>
			<td><?php echo $ush->status ?></td>
			<td><b><?php echo $ush->persetujuan ?></b></td>

			<td><?php echo anchor('admin/terima/'.$ush->id_promosi, 
			'<div class="btn btn-success btn-sm">Terima</div>') ?></td>

			<td><?php echo anchor('admin/Tolak/'.$ush->id_promosi, 
			'<div class="btn btn-warning btn-sm">Tolak</div>') ?></td>

			<td><?php echo anchor('admin/hapus/'.$ush->id_promosi, 
			'<div class="btn btn-danger btn-sm">Hapus</div>') ?></td>
		</tr>

		<?php endforeach ?>
	</table>

</div>