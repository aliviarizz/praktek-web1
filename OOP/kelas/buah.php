<?php
class buah
{
    public $nama;
    protected $warna;
    private $berat;

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function setBerat($berat)
    {
        $this->berat = $berat;
    }

    public function tampilkanInfo()
    {
        echo "Nama: " . $this->nama . "<br>";
        echo "Warna: " . $this->warna . "<br>";
        echo "Berat: " . $this->berat . " gram<br>";
    }
}

$mango = new buah();
$mango->setNama('Mango');
$mango->setWarna('Yellow');
$mango->setBerat('300');
$mango->tampilkanInfo();

/* 
Kesimpulan penyebab eror:
- Belum adanya method untuk mengeksekusi nilai atribut
- Pemanggilan method yang kurang tepat
- tidak adanya "echo" untuk menampilkan hasil
*/  
?>