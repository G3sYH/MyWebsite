<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Luas Persegi | G3sYH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS KHUSUS PROJECT -->
    <link rel="stylesheet" href="../../stylecss_project/stylecss_project_hitung_luas_persegi.css">
</head>
<body>

<div class="container">
    <div class="card">

        <h1 class="title">Hitung Luas Persegi</h1>
        <p class="subtitle">Masukkan panjang sisi persegi</p>

        <input type="number" id="sisi" class="input"
               placeholder="Masukkan sisi (cm)">

        <button id="btnHitung" class="btn">
            Hitung Luas
        </button>

        <div id="hasil" class="hasil">
            Luas: -
        </div>

        <a href="../menu/menu_project.php" class="btn-back">← Back to Project</a>

    </div>
</div>

<!-- JS LOGIC TERPISAH -->
<script src="../../js_controller/js_controller_hitung_luas_persegi.js"></script>

</body>
</html>