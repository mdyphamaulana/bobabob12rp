<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Berhasil Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
             |
            <a href="logout.php">Logout</a>
            |
            
                <a href="index.html">kembali ke Halaman</a>
            
</body>
</html>
