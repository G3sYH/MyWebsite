<?php require_once "../../auth/auth.php"; ?>

<?php
require_once "../../php_controller/controller_grade_nilai_mahasiswa.php";

$hasil = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nilai = $_POST["nilai"] ?? 0;
    $hasil = hitungnilai($nilai);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>G3sYH | Project - Grade Nilai Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/MyWebsite/img/favicon.png">
    <link rel="stylesheet" href="../../stylecss_project/stylecss_project_grade_nilai_mahasiswa.css">
</head>
<body>

<div class="card animate-card">

    <h1 class="title animate-item">Grade Nilai Mahasiswa</h1>
    <p class="subtitle animate-item">Masukkan nilai mahasiswa</p>

    <form method="post" class="animate-item">
        <input type="number" name="nilai" class="input"
               placeholder="Nilai (0 - 100)" required>

        <button type="submit" class="btn">Cek nilai</button>
    </form>

    <?php if ($hasil): ?>
        <div class="hasil animate-item">
            <p>Grade: <strong><?= $hasil["grade"] ?></strong></p>
            <p>Status: <strong><?= $hasil["status"] ?></strong></p>
        </div>
    <?php endif; ?>

    <a href="../menu/menu_project.php" class="btn-back animate-item">
        ← Back to Project
    </a>
</div>

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