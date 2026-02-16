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
    <title>nilai Siswa | G3sYH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../stylecss_project/stylecss_project_grade_nilai_mahasiswa.css">
</head>
<body>

<div class="container">
    <div class="card">

        <h1 class="title">Grade Nilai Mahasiswa</h1>
        <p class="subtitle">Masukkan nilai mahasiswa</p>

        <form method="post">
            <input type="number" name="nilai" class="input"
                   placeholder="Nilai (0 - 100)" required>

            <button type="submit" class="btn">Cek nilai</button>
        </form>

        <?php if ($hasil): ?>
            <div class="hasil">
                <p>Grade: <strong><?= $hasil["grade"] ?></strong></p>
                <p>Status: <strong><?= $hasil["status"] ?></strong></p>
            </div>
        <?php endif; ?>

        <a href="../menu/menu_project.php" class="btn-back">← Back to Project</a>

    </div>
</div>

</body>
</html>