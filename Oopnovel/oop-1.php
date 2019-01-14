<?php

Class Orang {
	public $nama = 'Novelia';
	public $jeniskelamin;

	public function makan()
	{
		return $this->nama.'sedang makan <br>';
	}
}

$saya = new Orang;
$saya->nama = 'Elsa';
echo $saya->makan();

$saya->nama = 'Tomi';
echo $saya->makan();