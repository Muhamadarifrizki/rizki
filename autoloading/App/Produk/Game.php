<?php 

class Game extends Produk implements InfoProduk {
		public $waktuMain;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {

			parent::__construct( $judul, $penulis, $penerbit, $harga );
			$this->waktuMain = $waktuMain;

		}

				public function getInfo() {

		//Komk : Naruto | Masashi Kishimoto, Shenom judul, (Rp.30000) - 100 halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

		return $str;
	}

		public function getInfoProduk() {
			$str = " Game : " . $this->getInfo() . "  ~ {$this->waktuMain} jam.";
			return $str;
		}
	}