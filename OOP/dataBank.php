<?php
require_once ('kelas/akunBank.php');

$data1=new AkunBank(001, 10000);
$data2=new AkunBank(002, 10000);

$data1->setNama("Jaemin");
$data1->tambahUang(500000);
$data2->kurangiUang(5000);
$data1->getJumlahUang();
$data2->getJumlahUang();

echo "Nama: ". $data1->getNama() . "<br>";
echo "Saldo Rp " . $data1->getJumlahUang() . "<br>";
echo "Pajak 11% : Rp ". $data1->hitungPajak(). "<br>";
echo "Saldo Rp ". $data2->getJumlahUang() . "<br>";
?>