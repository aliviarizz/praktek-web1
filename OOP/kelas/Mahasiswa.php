<?php
require_once "Manusia.php";

class mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        $this->setNama($nama);
    }

    public function setNIM($NIM)
    {
        $this->NIM = $NIM;
    }

    public function getNIM()
    {
        return " NIM: {$this->NIM} ";
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    public function getKelas()
    {
        return " Kelas: {$this->kelas} ";
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function getJurusan()
    {
        return " Jurusan: {$this->jurusan} ";
    }
}
?>