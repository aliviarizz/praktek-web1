<?php
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "Saya suka ". $namaBuah[0] .",". $namaBuah[1] . ",". $namaBuah[2] .". <br>";

//Tampilkan mangga
echo "Saya suka ". $namaBuah[1]. "<br>";
//Tampilkan jeruk
echo "Saya suka ". $namaBuah[2]. "<br>";
//Tampilkan apel
echo "Saya suka ". $namaBuah[3]. "<br>";
//Tampilkan melon
echo "Saya suka ". $namaBuah[4]. "<br>";

//array dengan spesifik index
$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"36 Tahun");
$umur['ahmad'] = "50 Tahun";
echo "Umur Andi adalah ". $umur['Andi']."<br>";
// Menampilkan semua umur
echo "Umur Ben adalah ".$umur['Ben']."<br>";
echo "Umur Joe adalah ".$umur['Joe']."<br>";
echo "Umur Ahmad adalah ".$umur['ahmad'];
?>