<?php
Class OrangTua {
	protected $nama = 'Tomi';
	protected $jenisKelamin ="Laki-laki";

	public function setData($nm = 'Muhammad Yuda',$jk = 'Laki-laki'){
		$this->nama = $nm;
		$this->jenisKelamin =$jk;
	}

	public function makan(){
		return "{$this->nama} sedang makan <br>";
	}
}

Class AnakOrang extends OrangTua {
	public function biodata () {
		return "Nama : {$this->nama} <br>".
			   "JenisKelamin :  {$this->jenisKelamin} <br>".
			   "============================================<p>";
	}
}

$anak = new AnakOrang;
$anak->setData('Novelia','Perempuan');
echo $anak->biodata();
echo $anak->makan();