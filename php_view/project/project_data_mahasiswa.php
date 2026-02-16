
<?php require_once "../../php_controller/controller_data_mahasiswa.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../../stylecss_project/stylecss_project_data_mahasiswa.css">
    <script src="../../js_controller/js_controller_data_mahasiswa.js" defer></script>
</head>
<body>

<div class="container">
<div class="card animate-card">

<h1 class="animate-item">Data Mahasiswa</h1>



<!-- CREATE (TETAP) -->
<form method="post" class="animate-item">
    <input
    type="text"
    name="nim"
    placeholder="NIM (10 digit)"
    maxlength="10"
    pattern="[0-9]{10}"
    inputmode="numeric"
    oninput="this.value=this.value.replace(/[^0-9]/g,'')"
    required
>
    <input name="nama" placeholder="Nama Mahasiswa" required>

    <select name="kelas" required>
        <option value="">Kelas</option>
        <option>A</option>
        <option>B</option>
        <option>C</option>
    </select>

    <select name="fakultas" id="fakultas" required>
        <option value="">Fakultas</option>
        <?php while($f=mysqli_fetch_assoc($fakultas)): ?>
            <option value="<?= $f['id'] ?>"><?= $f['nama'] ?></option>
        <?php endwhile; ?>
    </select>

    <select name="prodi" id="prodi" required>
        <option value="">Prodi</option>
    </select>

    <select name="dosen_pa" required>
        <option value="">Dosen PA</option>
        <?php while($d=mysqli_fetch_assoc($dosen)): ?>
            <option value="<?= $d['id'] ?>"><?= $d['nama'] ?></option>
        <?php endwhile; ?>
    </select>

    <button name="simpan">Simpan</button>
</form>

<?php if (!empty($error)): ?>
<div class="error animate-item">
    <?= $error ?>
</div>
<?php endif; ?>

<!-- SEARCH (TETAP) -->
<form method="get" class="search-form animate-item">
    <input
        type="text"
        name="search"
        placeholder="Cari nama atau NIM..."
        value="<?= htmlspecialchars($keyword ?? '') ?>"
    >
    <button type="submit">Search</button>
</form>

<!-- TABLE (TETAP) -->
<table class="animate-item">
<thead>
<tr>
    <th class="animate-item">No</th>
    <th class="animate-item">NIM</th>
    <th class="animate-item">Nama</th>
    <th class="animate-item">Kelas</th>
    <th class="animate-item">Fakultas</th>
    <th class="animate-item">Prodi</th>
    <th class="animate-item">Dosen PA</th>
    <!-- <th class="animate-item">Aksi</th> -->
</tr>
</thead>
<tbody>

<?php
$no = $offset + 1;
while ($m = mysqli_fetch_assoc($data)):
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $m['nim'] ?></td>
    <td><?= $m['nama'] ?></td>
    <td><?= $m['kelas'] ?></td>
    <td><?= $m['fakultas'] ?></td>
    <td><?= $m['prodi'] ?></td>
    <td><?= $m['dosen'] ?></td>
    <!-- <td>
        <a href="?hapus=<?= $m['id'] ?>" onclick="return confirm('Hapus data?')">
            Hapus
        </a>
        
    </td> -->
</tr>
<?php endwhile; ?>

<?php if (mysqli_num_rows($data) == 0): ?>
<tr>
    <td colspan="8" style="text-align:center;opacity:.7">
        Data tidak ditemukan
    </td>
</tr>
<?php endif; ?>

</tbody>
</table>

<div class="pagination-wrapper animate-item">

    <!-- PREV -->
    <?php if ($page > 1): ?>
        <a class="page-btn animate-item" href="?page=<?= $page - 1 ?>&search=<?= urlencode($keyword ?? '') ?>">
            Prev
        </a>
    <?php else: ?>
        <span class="page-btn disabled animate-item">Prev</span>
    <?php endif; ?>

    <!-- INFO -->
    <span class="page-info animate-item">
        <?= $page ?> / <?= $totalPage ?>
    </span>

    <!-- NEXT -->
    <?php if ($page < $totalPage): ?>
        <a class="page-btn animate-item" href="?page=<?= $page + 1 ?>&search=<?= urlencode($keyword ?? '') ?>">
            Next
        </a>
    <?php else: ?>
        <span class="page-btn disabled animate-item">Next</span>
    <?php endif; ?>

</div>

<!-- BACK -->
<div class="back-area animate-item">
    <a href="../menu/menu_project.php">← Back to Project</a>
</div>

</div>
</div>

</body>
</html> 