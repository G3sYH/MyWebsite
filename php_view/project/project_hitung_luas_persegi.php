<?php require_once "../../auth/auth.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>G3sYH | Project - Hitung Luas Persegi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/MyWebsite/img/favicon.png">
    <!-- CSS KHUSUS PROJECT -->
    <link rel="stylesheet" href="../../stylecss_project/stylecss_project_hitung_luas_persegi.css">
</head>
<body>

<div class="card animate-card">

    <h1 class="title animate-item">Hitung Luas Persegi</h1>
    <p class="subtitle animate-item">Masukkan panjang sisi persegi</p>

    <input type="number" id="sisi" class="input animate-item"
           placeholder="Masukkan sisi (cm)">

    <button id="btnHitung" class="btn animate-item">
        Hitung Luas
    </button>

    <div id="hasil" class="hasil animate-item">
        Luas: -
    </div>

    <a href="../menu/menu_project.php" class="btn-back animate-item">
        ← Back to Project
    </a>

</div>

<!-- JS LOGIC TERPISAH -->
<script src="../../js_controller/js_controller_hitung_luas_persegi.js"></script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const items = document.querySelectorAll(".animate-item");

    items.forEach((el, i) => {
        setTimeout(() => {
            el.classList.add("show");
        }, 250 + i * 130);
    });

});
</script>
</body>
</html>