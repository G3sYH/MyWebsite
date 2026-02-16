<?php
session_start();
$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="../stylecss_view/stylecss_auth.css">
</head>
<body>

<div class="container">
  <div class="card animate-card">

    <h1 class="animate-item">Register</h1>

    <?php if ($error): ?>
      <div class="system-error animate-item">
        <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="register_process.php" class="animate-item">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Daftar</button>
    </form>

    <div class="link-area animate-item">
      Sudah punya akun? <a href="login.php">Login</a>
    </div>

  </div>
</div>

</body>
</html>