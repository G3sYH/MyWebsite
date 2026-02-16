<?php
require_once "../db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $username = trim($_POST['username']);
  $email    = trim($_POST['email']);
  $password = $_POST['password'];

  // VALIDASI
  if (!preg_match("/^[a-zA-Z0-9]{5,20}$/", $username)) {
    die("Username tidak valid");
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Email tidak valid");
  }

  if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
    die("Password terlalu lemah");
  }

  // HASH PASSWORD
  $hash = password_hash($password, PASSWORD_DEFAULT);

  // CEK USER
  $cek = $conn->prepare("SELECT id FROM users WHERE username=? OR email=?");
  $cek->bind_param("ss", $username, $email);
  $cek->execute();
  $cek->store_result();

  if ($cek->num_rows > 0) {
    die("Username atau Email sudah digunakan");
  }

  // INSERT
  $stmt = $conn->prepare("INSERT INTO users(username,email,password) VALUES(?,?,?)");
  $stmt->bind_param("sss", $username, $email, $hash);
  $stmt->execute();

  echo "Registrasi berhasil";
}