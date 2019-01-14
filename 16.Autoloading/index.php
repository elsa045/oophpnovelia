<?php

require_once 'App/init.php';

$produk1 = new Komik ("Sheiland","Novelia Elsa P", "Media Kita", 85000,100);
$produk2 = new Game ("Bangtan Soeyondan","Kim Taehyung", "Big Hit Entertaiment", 250000,50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();