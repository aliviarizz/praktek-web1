<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: welcome.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Validasi input
        if (empty($_POST["username"]) || empty($_POST["password"])) {
            throw new Exception("Username dan password harus diisi!");
        }

        $username = $_POST["username"];
        $password = $_POST["password"];

        // Data login sederhana
        $user_valid = "admin";
        $pass_valid = "12345";

        // Proses login
        if ($username === $user_valid && $password === $pass_valid) {
            $_SESSION["username"] = $username;
            header("Location: welcome.php");
            exit;
        } else {
            throw new Exception("Username atau password salah!");
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post" action="">
    <label>Username:</label><br>
    <input type="text" name="username"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Login">
</form>

</body>
</html>