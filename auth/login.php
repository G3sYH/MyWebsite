<?php
session_start();
$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../stylecss_view/stylecss_auth.css">
</head>
<body>

<div class="container">
  <div class="card animate-card">

    <h1 class="animate-item">Login</h1>

    <?php if ($error): ?>
      <div class="system-error animate-item">
        <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="login_process.php" class="animate-item">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Masuk</button>
    </form>

    <div class="link-area animate-item">
      Belum punya akun? <a href="register.php">Register</a>
    </div>

  </div>
</div>

</body>
</html>