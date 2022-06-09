<?php 
class Penilaian extends CI_Controller
{
	public function index() {
		$id_login			= $this->input->post('id_login');
		$ulasan				= $this->input->post('ulasan');
		$jumlah_rating		= $this->input->post('jumlah_rating');

		$data = array (
			'id_login' 			=> $id_login,
			'ulasan' 			=> $ulasan,
			'jumlah_rating' 	=> $jumlah_rating,
		);
		$this->model_usaha->tambah_data($data, 'tb_penilaian');
		?>
			<script>window.location=history.go(-1);</script>;
 		<?php
		}

	}

?>