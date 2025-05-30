<?php
session_start();
include 'includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  if ($username && $password) {
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
      $user = $result->fetch_assoc();

      if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header("Location: halaman_dashboard_web_penjualan.html");
        exit();
      } else {
        echo "Password salah!";
      }
    } else {
      echo "Username tidak ditemukan!";
    }

    $stmt->close();
    $conn->close();
  } else {
    echo "Username dan password harus diisi!";
  }
} else {
  echo "Akses tidak sah.";
}
