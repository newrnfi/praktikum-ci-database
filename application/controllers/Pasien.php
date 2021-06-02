<?php 

	class Pasien extends CI_Controller {
		public function index() {
			// load atau memanggil model
			$this->load->model('pasien_model', 'pasien1');

			// object model 1
			$this->pasien1->id = '1';
			$this->pasien1->nama = 'Afifah Khairunnisa';
			$this->pasien1->kode = '011022';
			$this->pasien1->gender = 'P';

			// load model 2
			$this->load->model('pasien_model', 'pasien2');

			// object model 2
			$this->pasien2->id = '2';
			$this->pasien2->nama = 'Bambang G';
			$this->pasien2->kode = '011020';
			$this->pasien2->gender = 'L';

			// simpan object ke dalam array
			$patiens = [$this->pasien1, $this->pasien2];

			// siapin data untuk dikirim ke view
			$data['patiens'] = $patiens;

			// render view
			$this->load->view('layouts/header');
			$this->load->view('pasien/index', $data);
			$this->load->view('layouts/footer');
		}

		public function list() {
			$this->load->model('pasien_model');
			$patiens = $this->pasien_model->getAll();
			$data['patiens'] = $patiens;
			$this->load->view('layouts/header');
			$this->load->view('pasien/list', $data);
			$this->load->view('layouts/footer');
		}

		public function detail($id) {
			$this->load->model('pasien_model');

			$patien = $this->pasien_model->getById($id);

			if ($patien == NULL) {
				echo "Data Tidak Ada";
			}
			else {
				$data['patien'] = $patien;

				$this->load->view('layouts/header');
				$this->load->view('pasien/detail', $data);
				$this->load->view('layouts/footer');
			}
		}
	}

 ?>