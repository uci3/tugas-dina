<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
</head>
<body>

<h2>Halo, <?php echo $_SESSION['username']; ?>!</h2>

<a href="logout.php">Logout</a>

</body>
</html>
