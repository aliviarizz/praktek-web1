<?php
// buka koneksi dengan MySQL
include("koneksi.php");

// mengecek apakah url ada GET npm
if (isset($_GET["npm"])) {
    // menyimpan variabel id dari url ke dalam variabel $npm
    $id = $_GET["npm"];

    // jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM t_mahasiswa WHERE npm='$id'";
    $hasil_query = mysqli_query($link, $query);

    // periksa query, apakah ada kesalahan
    if(!$hasil_query) {
        die ("Gagal menghapus data: " . mysqli_errno($link) .
        " - " . mysqli_error($link));
    }
}

// melakukan redirect ke halaman indexmhs.php
header("location:indexmhs.php");
?>