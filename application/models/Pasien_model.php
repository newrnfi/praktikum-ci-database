<?php 

	class Pasien_model extends CI_Model {
		// buat property atau variabel
		public $id, $nama, $kode, $gender, $tmp_lahir, $tgl_lahir, $email;

		public function getAll() {
			$query = $this->db->get('pasien');
			return $query->result();
		}

		public function getById($id) {
			$query = $this->db->get_where('pasien', ['id' => $id]);
			return $query->row();
		}
	}

?>