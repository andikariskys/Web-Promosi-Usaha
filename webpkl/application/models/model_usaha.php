<?php 
	
	class Model_usaha extends CI_Model {
		public function tampil_data() {
			return $this->db->get('tb_data_usaha');
		}

		public function tampil_data_by_id($id) {
			return $this->db->get_where('tb_data_usaha', array('id_pengiklan' => $id));
		}
		public function detail($where) {
			return $this->db->get_where('tb_data_usaha', $where);
		}

		public function dashboard() {
			return $this->db->get_where('tb_data_usaha', array('persetujuan' => 'Diterima'));
		}

		public function tambah_data($data, $table) {
			$this->db->insert($table, $data);
		}

		public function edit_promosi($where, $table) {
			return $this->db->get_where($table, $where);
		}

		public function data_pengiklan() {
			return $this->db->get_where('tb_login', array('role_id' => '2'));
		}

		public function update_data($where, $data, $table) {
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		public function hapus_data($where, $table) {
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function data_admin() {
			return $this->db->get_where('tb_login', array('role_id' => '1'));
		}

		public function penilaian($where) {
			return $this->db->get_where('tb_penilaian', $where);
		}

		public function persetujuan_with_name() {
			return $this->db->query("SELECT d.*, l.nama FROM tb_data_usaha d join tb_login l ON d.id_pengiklan = l.id_login where id_pengiklan=id_login;");
		}

		public function penilaian_with_name($where) {
			return $this->db->query("SELECT p.*, l.nama FROM tb_penilaian p join tb_login l ON p.id_penilaian = l.id_login where id_promosi=$where;");
		}

		public function variasi($where) {
			return $this->db->get_where('tb_variasi', $where);
		}

		public function pencarian_data($keyword)
		{
			$this->db->select('*');
			$this->db->from('tb_data_usaha');
			$this->db->like('nama_usaha',$keyword);
			$this->db->or_like('nama_pengiklan', $keyword);
			$this->db->or_like('deskripsi', $keyword);

			return $this->db->get()->result();
		}
	}
?>