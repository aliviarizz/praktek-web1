<?php
// variabel koneksi dengan database mysql
$host = "localhost";
$user = "root";
$passwd = "";
$name = "php_crud";

// proses koneksi
$link = mysqli_connect($host, $user, $passwd,$name);

// periksa koneksi, jika gagal akan menampilkan pesan error
if(!$link) {
    die ("Koneksi dnegan databse gagal: " . mysqli_connect_errno().
    " - " . mysqli_connect_error());
}

?>