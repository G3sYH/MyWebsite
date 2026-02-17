<?php
session_start();
require_once "../db.php";

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $username)) {
    $_SESSION['error'] = "Username harus 6–12 karakter (huruf & angka)";
    header("Location: register.php");
    exit;
}

if (strlen($password) < 6) {
    $_SESSION['error'] = "Password minimal 6 karakter";
    header("Location: register.php");
    exit;
}

$cek = $conn->prepare("SELECT id FROM users WHERE username=?");
$cek->bind_param("s", $username);
$cek->execute();
$cek->store_result();

if ($cek->num_rows > 0) {
    $_SESSION['error'] = "Username sudah digunakan";
    header("Location: ../php_controller/action.php?type=info&msg=Identify Username&to=../auth/register.php");
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username,password) VALUES (?,?)");
$stmt->bind_param("ss", $username, $hash);
$stmt->execute();

$_SESSION['login'] = true;
$_SESSION['user_id'] = $stmt->insert_id;

header("Location: ../php_controller/action.php?type=success&msg=Register Success&to=../auth/login.php");
exit;