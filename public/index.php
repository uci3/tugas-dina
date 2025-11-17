<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: beranda.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Kelompok 14</title>
</head>
<body>

<h2>Login</h2>

<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>

<br>
<a href="register.php">Daftar</a>

</body>
</html>
