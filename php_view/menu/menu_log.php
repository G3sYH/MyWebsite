<?php require_once "../../auth/auth.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>G3sYH | Update Log</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="/MyWebsite/img/favicon.png">
<link rel="stylesheet" href="../../stylecss_view/stylecss_menu_log.css">
</head>
<body>

<div class="container">
  <div class="card animate-card">

    <h1 class="title animate-item">📜 Update Log</h1>
    <p class="subtitle animate-item">Progress & perubahan website</p>

    <div class="log-list">

      <div class="log-item animate-item">
        <div class="log-head">
          <span class="ver">V1.0</span>
          <span class="date">16 Feb 2026</span>
        </div>
        <p class="desc">First release</p>

        <ul class="log-detail">
    <li>Add Stylecss Folder</li>
    <li>Add Project Folder</li>
    <li>Add Php Controller Folder</li>
    <li>Add Database</li>
    <li>JavaScript Script</li>
    <li>Layout Menu</li>
    
  </ul>
      </div>

      <div class="log-item animate-item">
  <div class="log-head">
    <span class="ver">V1.1</span>
    <span class="date">—</span>
  </div>

  <p class="desc">UI improvement & code cleanup</p>

  <ul class="log-detail">
    <li>Add Auth</li>
    <li>Add animation all view</li>
    <li>Add Log View</li>
    <li>Improve layout consistency</li>
    <li>Fix auth protection</li>
    <li>Change icon</li>

  </ul>
</div>

    </div>

    <a href="menu_home.php" class="btn-back animate-item">
      ← Back to Home
    </a>

  </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".animate-item");

  items.forEach((el, i) => {
    setTimeout(() => {
      el.classList.add("show");
    }, 250 + i * 140);
  });
});
</script>      
</body>
</html>