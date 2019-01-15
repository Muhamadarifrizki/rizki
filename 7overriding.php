<?php 


// jualan Produk
// Komik
// Game

// kelas
class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $waktuMain;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->waktuMain = $waktuMain;
	} 

	// Method adalah function yang ada di dalam kelas
	// Method

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
		}

	public function getInfoProduk(){

		//Komk : Naruto | Masashi Kishimoto, Shenom judul, (Rp.30000) - 100 halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

		return $str;
	}


	}

	class Komik extends Produk{

		public $jmlHalaman;


		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

			parent::__construct( $judul, $penulis, $penerbit, $harga );
			$this->jmlHalaman = $jmlHalaman; 
		}



		public function getInfoProduk() {
			$str = " Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";
			return $str;
		}
	}


		class Game extends Produk{
		public $waktuMain;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {

			parent::__construct( $judul, $penulis, $penerbit, $harga );
			$this->waktuMain = $waktuMain;

		}

		public function getInfoProduk() {
			$str = " Game : " . parent::getInfoProduk() . "  ~ {$this->waktuMain} jam.";
			return $str;
		}
	}



	// object type
	class CetakInfoProduk {
		public function cetak( Produk $Produk ) {
			$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
			return $str;
		}
	}
// instansi
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shenom judul", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Drukmann", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
