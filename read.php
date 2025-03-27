<?php
    include 'koneksi.php';
    // Query dengan placeholder
    $stmt = $conn->prepare("SELECT id, name, email FROM users WHERE email =
    ?");
    $stmt->bind_param("s", $email);
    // Data yang akan dicari
    $email = "john@example.com";
    // Eksekusi query
    $stmt->execute();
    // Ambil hasil
    $result = $stmt->get_result();
    // Tampilkan data
    while ($row = $result->fetch_assoc()) {
        echo $row['id'] . " - " . $row['name'] . " - " . $row['email'] . "<br>";
    }
    // Tutup statement
    $stmt->close();
    $conn->close();
    ?>