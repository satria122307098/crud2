<?php
include 'koneksi.php';
// Query dengan placeholder
$stmt = $conn->prepare("DELETE FROM users WHERE email=?");
$stmt->bind_param("s", $email);
// Data yang akan dihapus
$email = "john@example.com";
// Eksekusi
$stmt->execute();
echo "Data berhasil dihapus!";
// Tutup statement
$stmt->close();
$conn->close();
?>