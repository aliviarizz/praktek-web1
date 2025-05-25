<?php
class buah2 {
    public $nama;
    public $warna;
    public $bobot;

    function set_name($n) {
        $this->nama = $n;
    }

    function set_color($n) {
        $this->warna = $n;
    }

    function set_weight($n) {
        $this->bobot = $n;
    }

    public function tampilkan() {
        echo "Nama: $this->nama<br>";
        echo "Warna: $this->warna<br>";
        echo "Berat: $this->bobot gram<br>";
    }
}

$mango = new buah2();
$mango->set_name('Mango');
$mango->set_color('Yellow');
$mango->set_weight('300');
$mango->tampilkan();

/*
Kesimpulan penyebab eror:
- method set_color() diseklasrasikan sebagai protected dan set_weight
  dideklarasikan sebagai private, kedua jenis method ini tidak dapat
  diakses di luar class
- belum adanya pemanggilan method "echo"
*/
?>