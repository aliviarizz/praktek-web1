<?php
include 'Koneksioop.php';
$db = new Koneksioop();

if (isset($_POST['simpan'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $sukses = $db->tambahMahasiswa($npm, $nama, $prodi, $alamat, $noHP);

    if ($sukses) {
        header('Location: index.php');
        exit;
    } else {
        echo "<script>alert('Gagal menyimpan data');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        body {
            display: flex;
            justify-content: center; 
            align-items: center;     
        }

        form {
            background-color: white;
            padding: 20px 30px;
            width: 350px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 6px;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }

        form p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #555;
        }

        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
            color: #333;
        }

        input[type="submit"] {
            background-color: #2980b9;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #1f6391;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Tambah Mahasiswa</h2>
        <p><label>NPM: <input type="number" name="npm" required></label></p>
        <p><label>Nama: <input type="text" name="namaMhs" required></label></p>
        <p><label>Prodi: <input type="text" name="prodi" required></label></p>
        <p><label>Alamat: <input type="text" name="alamat" required></label></p>
        <p><label>No HP: <input type="text" name="noHP" required></label></p>
        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>