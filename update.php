<?php
    include 'koneksi.php';
    // Query dengan placeholder
    $stmt = $conn->prepare("UPDATE users SET name=? WHERE email=?");
    $stmt->bind_param("ss", $nama_baru, $email);
    // Data yang akan diperbarui
    $nama_baru = "Jane Doe";
    $email = "john@example.com";
    // Eksekusi
    $stmt->execute();
    echo "Data berhasil diperbarui!";
    // Tutup statement
    $stmt->close();
    $conn->close();
?>