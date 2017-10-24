<?php 

	class identitas {
		public $nama;
		public $Warna;
		public $harga;
		public $tipe;

		function __construct ($nama, $warna, $harga, $tipe){
			$this->nama = $nama;
			$this->warna = $warna;
			$this->harga = $harga;
			$this->tipe = $tipe;
		}
		public function get_nama(){
			return $this->nama;
		}
		public function get_warna(){
			return $this->warna;
		}
		public function get_harga(){
			return $this->harga;
		}
		public function get_tipe(){
			return $this->tipe;
		}
	}

?>