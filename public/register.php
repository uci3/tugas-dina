<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $insert = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $insert);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Buat Username" required><br><br>
    <input type="password" name="password" placeholder="Buat Password" required><br><br>
    <button type="submit">Daftar</button>
</form>

</body>
</html>
