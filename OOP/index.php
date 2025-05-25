<?php
require_once ('kelas/Manusia.php');

$andi=new Manusia();
$andi->setNama("Andi Pratama");
$andi->setUmur(25);

$budi=new Manusia();
$budi->setNama("Budi Santoso");

$alivia=new Manusia();
$alivia->setNama("Alivia Rizka Wardani");

$nik = new Manusia();
$nik->getNIK();

echo($andi->getNama());
echo("<br>");
echo($andi->getUmur());
echo("<br>");
echo($budi->getNama());
echo("<br>");
echo($alivia->getNama());
echo("<br>");
echo($nik->getNIK());
echo("<br>");

/* 
Kesimpulan: 
Tiga properti Class Manusia telah diuji dengan baik: 
- Nama, yang dapat diset dan ditampilkan menggunakan setNama() dan getNama().
- Umur, yang dapat diatur dan ditampilkan dengan menggunakan setUmur() dan getUmur(). 
- NIK, yang bersifat tetap dan dapat diakses dengan menggunakan getNIK().
*/
?>