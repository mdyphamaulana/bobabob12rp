<?php
session_start();

// Periksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lakukan logika otentikasi Anda di sini
    // Jika otentikasi berhasil, tetapkan variabel sesi
    $_SESSION["id"] = ""; // Anda akan menggantinya dengan nama pengguna yang sebenarnya
}
?>
