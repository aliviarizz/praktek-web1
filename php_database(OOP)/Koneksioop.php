<?php
class Koneksioop {
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "php_crud";
    public $conn;

    public function __construct() {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if ($this->conn->connect_error) {
                throw new Exception("Koneksi gagal: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertDosen($namaDosen, $noHP) {
        $query = "INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $this->conn->error);
        }

        $stmt->bind_param("ss", $namaDosen, $noHP);
        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }

        $stmt->close();
    }

    public function search($table, $column, $keyword) {
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE $column LIKE ?");
        $like = "%$keyword%";
        $stmt->bind_param("s", $like);
        $stmt->execute();
        return $stmt->get_result();
    }

    // dosen
    public function getDosenById($idDosen) {
        $query = "SELECT * FROM t_dosen WHERE idDosen = ?";
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Prepare gagal: " . $this->conn->error);
        }

        $stmt->bind_param("i", $idDosen);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            return null;
        }

        return $result->fetch_assoc();
    }

    public function updateDosen($id, $namaDosen, $noHP) {
        $query = "UPDATE t_dosen SET namaDosen = ?, noHP = ? WHERE idDosen = ?";
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Prepare gagal: " . $this->conn->error);
        }

        $stmt->bind_param("ssi", $namaDosen, $noHP, $id);
        return $stmt->execute();
    }

    public function hapusDosen($idDosen) {
        $query = "DELETE FROM t_dosen WHERE idDosen = ?";
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Prepare gagal: " . $this->conn->error);
        }

        $stmt->bind_param("i", $idDosen);
        return $stmt->execute();
    }

    // mahasiswa
    public function tambahMahasiswa($npm, $namaMhs, $prodi, $alamat, $noHP) {
        $query = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Prepare statement gagal: " . $this->conn->error);
        }
        $stmt->bind_param("issss", $npm, $namaMhs, $prodi, $alamat, $noHP);
        return $stmt->execute();
    }

    public function getMahasiswaByNpm($npm) {
        $stmt = $this->conn->prepare("SELECT * FROM t_mahasiswa WHERE npm = ?");
        $stmt->bind_param("i", $npm);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateMahasiswa($npm, $namaMhs, $prodi, $alamat, $noHP) {
        $stmt = $this->conn->prepare("UPDATE t_mahasiswa SET namaMhs = ?, prodi = ?, alamat = ?, noHP = ? WHERE npm = ?");
        $stmt->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHP, $npm);
        return $stmt->execute();
    }

    public function deleteMahasiswa($npm) {
        $stmt = $this->conn->prepare("DELETE FROM t_mahasiswa WHERE npm = ?");
        $stmt->bind_param("i", $npm);
        return $stmt->execute();
    }

    // mata kuliah
    public function tambahMataKuliah($kodeMK, $namaMK, $sks, $jam) {
        $stmt = $this->conn->prepare("INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $kodeMK, $namaMK, $sks, $jam);
        return $stmt->execute();
    }

    public function getMataKuliah($kodeMK) {
        $stmt = $this->conn->prepare("SELECT * FROM t_matakuliah WHERE kodeMK = ?");
        $stmt->bind_param("s", $kodeMK);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function updateMataKuliah($kodeMK, $namaMK, $sks, $jam) {
        $stmt = $this->conn->prepare("UPDATE t_matakuliah SET namaMK = ?, sks = ?, jam = ? WHERE kodeMK = ?");
        $stmt->bind_param("siis", $namaMK, $sks, $jam, $kodeMK);
        return $stmt->execute();
    }

    public function deleteMataKuliah($kodeMK) {
        $stmt = $this->conn->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
        $stmt->bind_param("s", $kodeMK);
        return $stmt->execute();
    }

    public function __destruct() {
        $this->conn->close();
    }

}
?>