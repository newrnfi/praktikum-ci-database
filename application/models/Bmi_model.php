<?php 

	class Bmi_model extends CI_Model {
		// siapkan property
		public $berat, $tinggi;

		// membuat method menghitung nilai BMI
		public function nilaiBMI() {
			$bmi = $this->berat / pow($this->tinggi/100, 2);
			return $bmi;
		}

		// membuat method untuk mengetahui status berat badan
		public function statusBMI() {
			if ($this->nilaiBMI() < 18.5){
				return "Kekurangan Berat Badan";
			}else if($this->nilaiBMI() < 25.0){
				return "Normal (Ideal)";
			}else if($this->nilaiBMI() < 30.0){
				return "Kelebihan Berat Badan";
			}else{
				return "Kegemukan (Obesitas)";
			}
		}
	}

 ?>