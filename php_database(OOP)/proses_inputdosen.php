<?php
include 'Koneksioop.php';
$db = new Koneksioop();

// cek apakah form disubmit
if (isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // gunakan metode OOP untuk menyimpan data
    $db->insertDosen($namaDosen, $noHP);
}

// redirect ke halaman daftar dosen
header("Location: index.php");
exit;
?>