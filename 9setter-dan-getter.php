<?php 


// jualan Produk
// Komik
// Game

// kelas
class Produk {
	private $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $dikon = 0;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	} 

	public function setJudul( $judul ) {
		$this->judul = $judul;
	}

	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis() {
		$this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit() {
		$this->penerbit = $penulis;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}

	public function getDiskon(){
		return $this->diskon;
	}

	public function setHarga(){
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100);
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
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga(); 
echo"<hr>";

 
echo $produk1->getJudul();
