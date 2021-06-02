<?php 

	class Bmi_pasien extends CI_Controller {
		// buat property atau variabel
		public $id, $nama, $kode, $gender, $tmp_lahir, $tgl_lahir, $email;

		public function list() {
			$this->load->model('bmipasien_model');
			$bmipatiens = $this->bmipasien_model->getAll();
			$data['bmipatiens'] = $bmipatiens;
			$this->load->view('layouts/header');
			$this->load->view('bmipasien/list', $data);
			$this->load->view('layouts/footer');
		}

		public function detail($id) {
			$this->load->model('bmipasien_model');

			$bmipatien = $this->bmipasien_model->getById($id);

			if ($bmipatien == NULL) {
				echo "Data Tidak Ada";
			}
			else {
				$data['bmipatien'] = $bmipatien;

				$this->load->view('layouts/header');
				$this->load->view('bmipasien/detail', $data);
				$this->load->view('layouts/footer');
			}
		}
	}

?>