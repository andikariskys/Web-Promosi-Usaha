<?php 
 class Admin extends CI_Controller {
 	public function index()
	{
		$data['usaha'] = $this->model_usaha->dashboard()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/templates/footer');
	}

	public function detail($id)
	{
		$where = array('id_promosi' => $id);
		$data_usaha['usaha'] = $this->model_usaha->detail($where)->result();
		$data_variasi['variasi'] = $this->model_usaha->variasi($where)->result();
		$data_variasi['no_tlp'] = $this->model_usaha->detail($where)->result();
		$data_penilaian['penilaian'] = $this->model_usaha->penilaian_with_name($id)->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('detail_promosi', $data_usaha);
		$this->load->view('modal_lihat_produk', $data_variasi);
		$this->load->view('modal_penilaian', $data_penilaian);
		$this->load->view('admin/templates/footer');
	}

 	public function persetujuan()
	{
		$data['usaha'] = $this->model_usaha->persetujuan_with_name()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/persetujuan', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tentang()
	{
		$data['admin'] = $this->model_usaha->data_admin()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('tentang', $data);
		$this->load->view('admin/templates/footer');
	}

	public function terima($id)
	{
		$where = array('id_promosi' => $id);
		$persetujuan = "Diterima";
		$data = array(
			'persetujuan' => $persetujuan
		);

		$where = array(
			'id_promosi' => $id
		);
		$this->model_usaha->update_data($where, $data, 'tb_data_usaha');
		redirect('admin/persetujuan');
	}

	public function tolak($id)
	{
		$where = array('id_promosi' => $id);
		$persetujuan = "Ditolak";
		$data = array(
			'persetujuan' => $persetujuan
		);

		$where = array(
			'id_promosi' => $id
		);
		$this->model_usaha->update_data($where, $data, 'tb_data_usaha');
		redirect('admin/persetujuan');
	}

	public function hapus($id)
	{
		$where = array('id_promosi' => $id);
		$this->model_usaha->hapus_data($where, 'tb_data_usaha');
		redirect('admin/persetujuan');
	}

	public function pencarian()
	{
		$keyword = $_GET['keyword'];
		$data['pencarian'] = $this->model_usaha->pencarian_data($keyword);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/cari_usaha', $data);
		$this->load->view('admin/templates/footer');
	}
}