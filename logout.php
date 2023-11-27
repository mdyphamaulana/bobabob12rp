<?php
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Alihkan ke halaman utama atau tempat yang diinginkan
header("Location: index.php");
exit();
?>
