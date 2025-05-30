<?php
$conn = new mysqli("localhost", "root", "", "liliy_tugas");
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}