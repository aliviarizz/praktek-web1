<?php
include 'Koneksioop.php';
$db = new Koneksioop();

// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // panggil method updateDosen dari class
    $success = $db->updateDosen($id, $namaDosen, $noHP);

    if (!$success) {
        die("Update data gagal dijalankan.");
    }
}

// redirect ke halaman daftar dosen
header("Location: index.php");
exit;
?>
