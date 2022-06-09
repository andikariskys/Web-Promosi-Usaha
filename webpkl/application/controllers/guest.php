<?php

class Guest extends CI_Controller {

	public function index()
	{
		$data['usaha'] = $this->model_usaha->dashboard()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$where = array('id_promosi' => $id);
		$data_usaha['usaha'] = $this->model_usaha->detail($where)->result();
		$data_variasi['variasi'] = $this->model_usaha->variasi($where)->result();
		$data_variasi['no_tlp'] = $this->model_usaha->detail($where)->result();
		$data_penilaian['penilaian'] = $this->model_usaha->penilaian_with_name($id)->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_promosi', $data_usaha);
		$this->load->view('modal_lihat_produk', $data_variasi);
		$this->load->view('modal_penilaian', $data_penilaian);
		$this->load->view('templates/footer');
	}

	public function tentang()
	{
		$data['admin'] = $this->model_usaha->data_admin()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tentang', $data);
		$this->load->view('templates/footer');
	}

	public function pencarian()
	{
		$keyword = $_GET['keyword'];
		$data['pencarian'] = $this->model_usaha->pencarian_data($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('cari_usaha', $data);
		$this->load->view('templates/footer');
	}
}
