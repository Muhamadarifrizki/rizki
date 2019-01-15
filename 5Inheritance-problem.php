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
		   $waktuMain,
		   $type;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $type ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->type = $type;
	}

	// Method adalah function yang ada di dalam kelas
	// Method

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
		}

	public function getInfoLengkap(){

		//Komk : Naruto | Masashi Kishimoto, Shenom judul, (Rp.30000) - 100 halaman.
		$str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
		if( $this->type == "Komik") {
			$str .= " - {$this->jmlHalaman} halaman.";
		}else if($this->type == "Game") {
			$str .= " ~ {$this->waktuMain} jam.";
		}

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
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shenom judul", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Drukmann", "Sony Computer", 250000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
