<?php 

	class Bmipasien_model extends CI_Model {
		// siapkan property
		public $id, $pasien, $tanggal, $bmi;

		public function getAll() {
			$query = $this->db->get('bmi_pasien');
			return $query->result();
		}

		public function getById($id) {
			$query = $this->db->get_where('bmi_pasien', ['id' => $id]);
			return $query->row();
		}
	}

 ?>