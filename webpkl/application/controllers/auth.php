<?php 

	class Auth extends CI_Controller
	{
		public function login() 
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() == FALSE) 
			{
				$this->load->view('templates/header');
				$this->load->view('form_login');
				$this->load->view('templates/footer');
			} else {
				$auth = $this->model_auth->cek_login();

				if($auth == FALSE) 
				{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Username atau password Anda salah!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
					redirect('auth/login');
				} else {
					$this->session->set_userdata('id_login', $auth->id_login);
					$this->session->set_userdata('nama', $auth->nama);
					$this->session->set_userdata('username', $auth->username);
					$this->session->set_userdata('id_login', $auth->id_login);
					$this->session->set_userdata('role_id', $auth->role_id);

					switch($auth->role_id) {
						case 1 : redirect('admin');
						break;
						case 2 : redirect('login');
						break;
						default : break;
					}
				}
			}
			
		}

		public function daftar() 
		{
			$this->form_validation->set_rules('nama', 'Nama', 'required', 
				['required' => 'Nama Wajib diisi!']);
			$this->form_validation->set_rules('username', 'Username', 'required', 
				['required' => 'Username Wajib diisi!']);
			$this->form_validation->set_rules('email', 'Email', 'required', 
				['required' => 'Email Wajib diisi!']);
			$this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', 
				['required' => 'Password Wajib diisi!', 'matches' => 'Password tidak cocok']);
			$this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header');
				$this->load->view('form_registrasi');
				$this->load->view('templates/footer');
			} else {
				$data = array(
					'id_login' 	=> '',
					'nama' 		=> $this->input->post('nama'),
					'email' 	=> $this->input->post('email'),
					'username' 	=> $this->input->post('username'),
					'password' 	=> $this->input->post('password_1'),
					'role_id' 	=> 2
				);

				$this->db->insert('tb_login', $data);
				redirect('auth/login');
			}
			
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('auth/login');
		}

	}

?>