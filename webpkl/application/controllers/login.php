<?php 
 class Login extends CI_Controller {
 	public function index()
	{
		$data['usaha'] = $this->model_usaha->dashboard()->result();
		$this->load->view('login/templates/header');
		$this->load->view('login/templates/sidebar');
		$this->load->view('login/templates/topbar');
		$this->load->view('login/dashboard', $data);
		$this->load->view('login/templates/footer');
	}

	public function detail($id)
	{
		$where = array('id_promosi' => $id);
		$data_usaha['usaha'] = $this->model_usaha->detail($where)->result();
		$data_variasi['variasi'] = $this->model_usaha->variasi($where)->result();
		$data_variasi['no_tlp'] = $this->model_usaha->detail($where)->result();
		$data_penilaian['penilaian'] = $this->model_usaha->penilaian_with_name($id)->result();
		$this->load->view('login/templates/header');
		$this->load->view('login/templates/sidebar');
		$this->load->view('detail_promosi', $data_usaha);
		$this->load->view('modal_lihat_produk', $data_variasi);
		$this->load->view('modal_penilaian', $data_penilaian);
		$this->load->view('login/templates/footer');
	}

 	public function kelola_promosi()
	{
		$id = $this->session->id_login;
		// $data['usaha'] = $this->model_usaha->tampil_data()->result();
		$data['usaha'] = $this->model_usaha->tampil_data_by_id($id)->result();
		$data['user'] = $this->model_usaha->data_pengiklan()->result();
		$this->load->view('login/templates/header');
		$this->load->view('login/templates/sidebar');
		$this->load->view('login/kelola_promosi', $data);
		$this->load->view('login/modal_input', $data);
		$this->load->view('login/templates/footer');
	}

	public function tentang()
	{
		$data['admin'] = $this->model_usaha->data_admin()->result();
		$this->load->view('login/templates/header');
		$this->load->view('login/templates/sidebar');
		$this->load->view('tentang', $data);
		$this->load->view('login/templates/footer');
	}

	public function tambah_aksi()
	{
		$id_pengiklan 		= $this->input->post('id_pengiklan');
		$nama_usaha			= $this->input->post('nama_usaha');
		$nama_pengiklan 	= $this->input->post('nama_pengiklan');
		$deskripsi			= $this->input->post('deskripsi');
		$alamat				= $this->input->post('alamat');
		$no_whatsapp		= $this->input->post('no_whatsapp');
		$status 			= $this->input->post('status');
		$persetujuan 		= "Ditolak";
		$foto 				= $_FILES['foto']['name'];
		if ($foto='') {} else{
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "Gambar/Foto Gagal Di Upload!";
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

		$data = array (
			'id_pengiklan' 		=> $id_pengiklan,
			'nama_usaha' 		=> $nama_usaha,
			'nama_pengiklan' 	=> $nama_pengiklan,
			'deskripsi' 		=> $deskripsi,
			'alamat' 			=> $alamat,
			'no_whatsapp'		=> $no_whatsapp,
			'status' 			=> $status,
			'persetujuan'		=> $persetujuan,
			'foto' 				=> $foto
		);
		$this->model_usaha->tambah_data($data, 'tb_data_usaha');
		redirect('login/kelola_promosi');
	}

	public function edit($id)
	{
		$where = array('id_promosi' => $id);
		$data['usaha'] = $this->model_usaha->edit_promosi($where,
			'tb_data_usaha')->result();
		$this->load->view('login/templates/header');
		$this->load->view('login/templates/sidebar');
		$this->load->view('login/edit_promosi', $data);
		$this->load->view('login/templates/footer');
	}

	public function update()
	{
		$id 				= $this->input->post('id_promosi');
		$id_pengiklan 		= $this->input->post('id_pengiklan');
		$nama_usaha 		= $this->input->post('nama_usaha');
		$nama_pengiklan 	= $this->input->post('nama_pengiklan');
		$deskripsi 			= $this->input->post('deskripsi');
		$alamat 			= $this->input->post('alamat');
		$no_whatsapp 		= $this->input->post('no_whatsapp');
		$status 			= $this->input->post('status');
		$foto 				= $_FILES['foto']['name'];
		if ($foto='') {} else{
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "Gambar/Foto Gagal Di Upload!";
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

		$data = array(
			'id_pengiklan' 		=> $id_pengiklan,
			'nama_usaha' 		=> $nama_usaha,
			'nama_pengiklan' 	=> $nama_pengiklan,
			'deskripsi' 		=> $deskripsi,
			'alamat' 			=> $alamat,
			'no_whatsapp'		=> $no_whatsapp,
			'status' 			=> $status,
			'foto' 				=> $foto
		);

		$where = array(
			'id_promosi' => $id
		);
		
		$this->model_usaha->update_data($where, $data, 'tb_data_usaha');
		redirect('login/kelola_promosi');
	}

	public function kelola_variasi($id)
	{
		$where = array('id_promosi' => $id);
		$data['variasi'] = $this->model_usaha->variasi($where)->result();
		$data['usaha'] = $this->model_usaha->detail($where)->result();
		$data['id_usaha'] = $id;
		$this->load->view('login/templates/header');
		$this->load->view('login/templates/sidebar');
		$this->load->view('login/kelola_variasi', $data);
		$this->load->view('login/templates/footer');
	}

	public function tambah_variasi()
	{
		$id_promosi 		= $this->input->post('id_promosi');
		$variasi_produk		= $this->input->post('variasi_produk');
		$harga_produk		= $this->input->post('harga_produk');
		$foto 				= $_FILES['foto']['name'];
		if ($foto='') {} else{
			$config['upload_path'] = './uploads/variasi';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "Gambar/Foto Gagal Di Upload!";
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

		$data = array (
			'id_promosi' 		=> $id_promosi,
			'variasi_produk' 	=> $variasi_produk,
			'harga_variasi'		=> $harga_produk,
			'foto' 				=> $foto
		);
		$this->model_usaha->tambah_data($data, 'tb_variasi');
		redirect('login/kelola_variasi/'.$id_promosi);
	}

	public function hapus_variasi($id)
	{
		$where = array('id' => $id);
		$this->model_usaha->hapus_data($where, 'tb_variasi');
		?>
		<script>window.location=history.go(-1);</script>;
 	<?php
	}

	public function status_buka($id)
	{
		$where = array('id_promosi' => $id);
		$status = "Buka";
		$data = array(
			'status' => $status
		);

		$where = array(
			'id_promosi' => $id
		);
		$this->model_usaha->update_data($where, $data, 'tb_data_usaha');
		redirect('login/kelola_promosi');
	}

	public function status_tutup($id)
	{
		$where = array('id_promosi' => $id);
		$status = "Tutup";
		$data = array(
			'status' => $status
		);

		$where = array(
			'id_promosi' => $id
		);
		$this->model_usaha->update_data($where, $data, 'tb_data_usaha');
		redirect('login/kelola_promosi');
	}

	public function hapus($id)
	{
		$where = array('id_promosi' => $id);
		$this->model_usaha->hapus_data($where, 'tb_data_usaha');
		redirect('login/kelola_promosi');
	}

	public function pencarian()
	{
		$keyword = $_GET['keyword'];
		$data['pencarian'] = $this->model_usaha->pencarian_data($keyword);
		$this->load->view('login/templates/header');
		$this->load->view('login/templates/sidebar');
		$this->load->view('login/templates/topbar');
		$this->load->view('login/cari_usaha', $data);
		$this->load->view('login/templates/footer');
	}
 }
?>
