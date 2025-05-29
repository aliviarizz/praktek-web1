<?php
include 'Koneksioop.php';
$db = new Koneksioop();

$npm = isset($_GET['npm']) ? intval($_GET['npm']) : 0;
$row = $db->getMahasiswaByNpm($npm);

if (!$row) {
    die("Data tidak ditemukan.");
}

if (isset($_POST['update'])) {
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $berhasil = $db->updateMahasiswa($npm, $namaMhs, $prodi, $alamat, $noHP);
    if ($berhasil) {
        header('Location: index.php');
        exit;
    } else {
        echo "<script>alert('Gagal mengupdate data');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit Mahasiswa</title>
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
    <form method="post" action="">
        <h2>Edit Mahasiswa</h2>
        <p><label>Nama:
            <input type="text" name="namaMhs" value="<?= htmlspecialchars($row['namaMhs']) ?>" required>
        </label></p>
        <p><label>Prodi:
            <input type="text" name="prodi" value="<?= htmlspecialchars($row['prodi']) ?>" required>
        </label></p>
        <p><label>Alamat:
            <input type="text" name="alamat" value="<?= htmlspecialchars($row['alamat']) ?>" required>
        </label></p>
        <p><label>No HP:
            <input type="text" name="noHP" value="<?= htmlspecialchars($row['noHP']) ?>" required>
        </label></p>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
