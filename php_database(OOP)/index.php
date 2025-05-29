<?php
include 'Koneksioop.php';
$db = new Koneksioop();

// Mahasiswa
$keywordMhs = $_GET['keyword_mhs'] ?? '';
$resultMhs = $db->search('t_mahasiswa', 'namaMhs', $keywordMhs);

// Mata Kuliah
$keywordMK = $_GET['keyword_mk'] ?? '';
$resultMK = $db->search('t_matakuliah', 'namaMK', $keywordMK);

// Dosen
$keywordDosen = $_GET['keyword_dosen'] ?? '';
$resultDosen = $db->search('t_dosen', 'namaDosen', $keywordDosen);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
            color: #333;
        }

        h2 {
            color: #2c3e50;
        }

        a {
            text-decoration: none;
            color: #2980b9;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 8px 15px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1f6391;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            border: 1px solid #ccc; /* tambahkan border untuk seluruh tabel */
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc; /* tambahkan border untuk sel */
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td a.button {
            display: inline-block;
            padding: 6px 12px;
            margin-right: 5px;
            background-color: #3498db;
            color: white !important;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        td a.button:hover {
            background-color: #2980b9;
        }

        td a.button.delete {
            background-color: #e74c3c;
        }

        td a.button.delete:hover {
            background-color: #c0392b;
        }
    </style>

</head>
<body>

    <!-- Data Mahasiswa -->
    <h2>Data Mahasiswa</h2>
    <a href="tambahmhs.php">+ Tambah Mahasiswa</a>
    <form method="get">
        <input type="text" name="keyword_mhs" placeholder="Cari nama mahasiswa..." value="<?= htmlspecialchars($keywordMhs) ?>">
        <input type="submit" value="Cari">
    </form>
    <table>
        <tr><th>NPM</th><th>Nama</th><th>Prodi</th><th>Alamat</th><th>No HP</th><th>Aksi</th></tr>
        <?php while($row = mysqli_fetch_assoc($resultMhs)): ?>
        <tr>
            <td><?= htmlspecialchars($row['npm']) ?></td>
            <td><?= htmlspecialchars($row['namaMhs']) ?></td>
            <td><?= htmlspecialchars($row['prodi']) ?></td>
            <td><?= htmlspecialchars($row['alamat']) ?></td>
            <td><?= htmlspecialchars($row['noHP']) ?></td>
            <td>
                <a href="editmhs.php?npm=<?= urlencode($row['npm']) ?>" class="button">Edit</a>
                <a href="hapusmhs.php?npm=<?= urlencode($row['npm']) ?>" class="button delete" onclick="return confirm('Hapus mahasiswa ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <!-- Data Mata Kuliah -->
    <h2>Data Mata Kuliah</h2>
    <a href="tambahmk.php">+ Tambah Mata Kuliah</a>
    <form method="get">
        <input type="text" name="keyword_mk" placeholder="Cari nama mata kuliah..." value="<?= htmlspecialchars($keywordMK) ?>">
        <input type="submit" value="Cari">
    </form>
    <table>
        <tr><th>Kode Mata Kuliah</th><th>Nama Mata Kuliah</th><th>SKS</th><th>Jam</th><th>Aksi</th></tr>
        <?php while($mk = mysqli_fetch_assoc($resultMK)): ?>
        <tr>
            <td><?= htmlspecialchars($mk['kodeMK']) ?></td>
            <td><?= htmlspecialchars($mk['namaMK']) ?></td>
            <td><?= htmlspecialchars($mk['sks']) ?></td>
            <td><?= htmlspecialchars($mk['jam']) ?></td>
            <td>
                <a href="editmk.php?kodeMK=<?= urlencode($mk['kodeMK']) ?>" class="button">Edit</a>
                <a href="hapusmk.php?kodeMK=<?= urlencode($mk['kodeMK']) ?>" class="button delete" onclick="return confirm('Hapus mata kuliah ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <!-- Data Dosen -->
    <h2>Data Dosen</h2>
    <a href="input.php">+ Tambah Dosen</a>
    <form method="get">
        <input type="text" name="keyword_dosen" placeholder="Cari nama dosen..." value="<?= htmlspecialchars($keywordDosen) ?>">
        <input type="submit" value="Cari">
    </form>
    <table>
        <tr><th>ID</th><th>Nama Dosen</th><th>No HP</th><th>Aksi</th></tr>
        <?php while($dosen = mysqli_fetch_assoc($resultDosen)): ?>
        <tr>
            <td><?= htmlspecialchars($dosen['idDosen']) ?></td>
            <td><?= htmlspecialchars($dosen['namaDosen']) ?></td>
            <td><?= htmlspecialchars($dosen['noHP']) ?></td>
            <td>
                <a href="editdosen.php?idDosen=<?= urlencode($dosen['idDosen']) ?>" class="button">Edit</a>
                <a href="hapusdosen.php?idDosen=<?= urlencode($dosen['idDosen']) ?>" class="button delete" onclick="return confirm('Hapus dosen ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>