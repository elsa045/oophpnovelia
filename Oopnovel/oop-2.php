<?php

Class OrangTua {
	public $nama = 'Tomi';
	public $jeniskelamin = "Laki-laki";

	public function makan() {
		return "{$this->nama} sedang makan <bt>";
	}
}

Class AnakOrang extends OrangTua {

	public function biodata() {
		return "Nama : {$this->nama} <br>".
			   " jenis kelamin : {$this->jeniskelamin} <br>".
			   "=============================================<p>";
	}
}

$anak = new AnakOrang;
$anak->nama ="Novelia";
$anak->jeniskelamin = "Perempuan";
echo $anak->biodata();
echo $anak->makan();