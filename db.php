<?php
$conn = mysqli_connect("localhost","root","","kampus_db");
if (!$conn) {
    die("Koneksi database gagal");
}