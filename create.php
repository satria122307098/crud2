<?php
    include 'koneksi.php';
    // Query dengan placeholder (?)
    $stmt = $conn->prepare("INSERT INTO users (name, email, passw) VALUES
    (?, ?, ?)");
    // Bind parameter (s = string)
    $stmt->bind_param("sss", $nama, $email, $password);
    // Data yang akan dimasukkan
    $nama = "John Doe";
    $email = "john@example.com";
    $password = password_hash("123456", PASSWORD_DEFAULT);
    // Eksekusi statement
    $stmt->execute();
    echo "Data berhasil ditambahkan!";
    // Tutup statement
    $stmt->close();
    $conn->close();
?>
