<?php

// define( 'NAMA', 'Novelia Elsa P');
//echo NAMA;

//echo "<br>";

//const UMUR = 17;
//echo UMUR;

//class coba {
// const NAMA = 'Novelia Elsa P';
//}

// echo coba :: NAMA;



// echo __FILE__;


// function coba(){
//return __FUNCTION__;
//}

//echo coba();

class coba {
	public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;