<?php
include 'includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Pastikan data tidak kosong
  if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Prepare statement untuk menghindari SQL injection
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
      // Jika sukses, redirect ke halaman login
      header("Location: login.php");
      exit();
    } else {
      echo "Gagal menyimpan data: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
  } else {
    echo "Semua input harus diisi!";
  }
} else {
  echo "Akses tidak sah.";
}