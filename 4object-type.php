<?php 


// jualan Produk
// Komik
// Game

// kelas
class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	// Method adalah function yang ada di dalam kelas
	// Method

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
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
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shenom judul", 30000);
$produk2 = new Produk("Uncharted", "Neil Drukmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";


$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk1); 


