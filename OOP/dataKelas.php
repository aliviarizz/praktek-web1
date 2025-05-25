<?php
require_once ('kelas/Mahasiswa.php');

$mhs1= new mahasiswa("Alivia Rizka Wardani");
$mhs1->setNIM("244311035");
$mhs1->setKelas("2B TRPL");

// menampilkan nama, nim, dan kelas dari $mhs1
echo($mhs1->getNama());
echo($mhs1->getNIM());
echo($mhs1->getKelas());
?>