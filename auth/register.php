<?php
session_start();
$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>G3sYH | Register</title>
  <link rel="icon" type="image/png" href="/MyWebsite/img/favicon.png">
  <link rel="stylesheet" href="../stylecss_view/stylecss_auth.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="container">
  <div class="card animate-card">

    <h1 class="animate-item" style="animation-delay: .15s">Register</h1>

    <?php if ($error): ?>
      <div class="system-error animate-item">
        <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="register_process.php">

      <div class="input-group animate-item" style="animation-delay: .30s">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="username" placeholder="Username" required>
      </div>

      <div class="input-group animate-item" style="animation-delay: .45s">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn-submit animate-item" style="animation-delay: .60s">
        <i class="fa-solid fa-user-plus"></i>
        Daftar
      </button>

    </form>

    <div class="link-area animate-item" style="animation-delay: .75s">
      Sudah punya akun? <a href="login.php">Login</a>
    </div>

  </div>
</div>

</body>
</html>