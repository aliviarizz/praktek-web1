<?php
session_start();

// Jika sudah login, redirect ke halaman selamat datang
if (isset($_SESSION["username"])) {
    header("Location: welcome.php");
    exit;
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Data login statis (bisa diganti dari database)
    $user_valid = "admin";
    $pass_valid = "12345";

    if ($username == $user_valid && $password == $pass_valid) {
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Username atau password salah!";
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
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

</body>
</html>