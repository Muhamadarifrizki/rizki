<?php 

Abstract class Produk {
	protected $judul,
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

	Abstract public function getInfo();


	}





