<?php

class AkunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;


    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama= $nama;
    }

    // menambah jumlah uang
    public function tambahUang($jumlah)
    {
        $this->jmlUang += $jumlah;
    }

    // mengurangi jumlah uang
    public function kurangiUang($jumlah)
    {
        if ($jumlah <= $this->jmlUang) {
            $this->jmlUang -= $jumlah;
        } else {
            echo "Saldo anada tidak cukup untuk dikurangi sebesar $jumlah.<br>";
        }
    }

    // menampilkna jumlah uang
    public function getJumlahUang()
    {
        return $this->jmlUang;
    }

    // menghitung pajak
    public function hitungPajak()
    {
        return $this->jmlUang * 0.11;
    }
}
?>