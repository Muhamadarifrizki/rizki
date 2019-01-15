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
		   $jmlHalaman,
		   $waktuMain;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	} 

	// Method adalah function yang ada di dalam kelas
	// Method

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
		}

	public function getInfoProduk(){

		//Komk : Naruto | Masashi Kishimoto, Shenom judul, (Rp.30000) - 100 halaman.
		$str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

		return $str;
	}


	}

	class Komik extends Produk{
		public function getInfoProduk() {
			$str = " Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} halaman.";
			return $str;
		}
	}


		class Game extends Produk{
		public function getInfoProduk() {
			$str = " Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})  ~ {$this->waktuMain} jam.";
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
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shenom judul", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Drukmann", "Sony Computer", 250000, 0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
