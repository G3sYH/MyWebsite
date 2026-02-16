<?php
session_start(); // 🔥 WAJIB
require_once "../../db.php";

$error = "";

/* =========================
   CREATE
========================= */
if (isset($_POST['simpan'])) {
    $nim   = $_POST['nim'];
    $nama  = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $fak   = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $pa    = $_POST['dosen_pa'];

    if (!preg_match('/^[0-9]{10}$/', $nim)) {

        $_SESSION['flash_error'] = "NIM harus 10 digit angka";
        header("Location: ../../php_controller/action.php?type=error&msg=NIM harus 10 digit angka&to=/mywebsite/php_view/project/project_data_mahasiswa.php");
        exit;

    }
    elseif (!preg_match('/^[A-Za-z ]{1,50}$/', $nama)) {

        $_SESSION['flash_error'] = "Nama hanya huruf dan spasi";
        header("Location: ../../php_controller/action.php?type=error&msg=Nama hanya huruf dan spasi&to=/mywebsite/php_view/project/project_data_mahasiswa.php");
        exit;

    }
    else {

        $cek = mysqli_query($conn,
            "SELECT id FROM mahasiswa WHERE nim='$nim' OR nama='$nama'"
        );

        if (mysqli_num_rows($cek) > 0) {

            // 🔥 INI YANG KAMU MAU
            $_SESSION['flash_error'] = "NIM atau Nama sudah terdaftar";

            header("Location: ../../php_controller/action.php?type=error&msg=NIM atau Nama sudah terdaftar&to=/mywebsite/php_view/project/project_data_mahasiswa.php");
            exit;

        } else {

            mysqli_query($conn,
                "INSERT INTO mahasiswa
                (nim,nama,kelas,fakultas_id,prodi_id,dosen_pa_id)
                VALUES
                ('$nim','$nama','$kelas','$fak','$prodi','$pa')"
            );

            header("Location: ../../php_controller/action.php?type=success&msg=Data berhasil ditambahkan&to=/mywebsite/php_view/project/project_data_mahasiswa.php");
            exit;
        }
    }
}

/* =========================
   DELETE
========================= */
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id'");

    header("Location: ../../php_controller/action.php?type=success&msg=Data berhasil dihapus&to=/mywebsite/php_view/project/project_data_mahasiswa.php");
    exit;
}

/* =========================
   DROPDOWN
========================= */
$fakultas = mysqli_query($conn,"SELECT * FROM fakultas");
$dosen    = mysqli_query($conn,"SELECT * FROM dosen_pa");

/* =========================
   SEARCH
========================= */
$keyword = $_GET['search'] ?? '';
$where = "";

if ($keyword !== "") {
    $keyword = mysqli_real_escape_string($conn, $keyword);
    $where = "WHERE m.nama LIKE '%$keyword%' OR m.nim LIKE '%$keyword%'";
}

/* =========================
   PAGINATION
========================= */
$limit = 7;
$page = isset($_GET['page']) ? (int)$page = $_GET['page'] : 1;
$page = $page < 1 ? 1 : $page;
$offset = ($page - 1) * $limit;

$totalQuery = mysqli_query($conn,"
    SELECT COUNT(*) AS total 
    FROM mahasiswa m
    $where
");
$totalData = mysqli_fetch_assoc($totalQuery)['total'];
$totalPage = ceil($totalData / $limit);

/* =========================
   READ
========================= */
$data = mysqli_query($conn,"
    SELECT 
        m.id, m.nim, m.nama, m.kelas,
        f.nama AS fakultas,
        p.nama AS prodi,
        d.nama AS dosen
    FROM mahasiswa m
    JOIN fakultas f ON m.fakultas_id = f.id
    JOIN prodi p ON m.prodi_id = p.id
    JOIN dosen_pa d ON m.dosen_pa_id = d.id
    $where
    ORDER BY m.nim ASC
    LIMIT $limit OFFSET $offset
");