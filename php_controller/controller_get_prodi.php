<?php
require_once "../db.php";

$fakultas_id = $_GET['fakultas_id'] ?? 0;

$query = mysqli_query($conn, "
    SELECT id, nama 
    FROM prodi 
    WHERE fakultas_id = '$fakultas_id'
");

$data = [];
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

header("Content-Type: application/json");
echo json_encode($data);