<?php
$type = $_GET['type'] ?? 'info';
$msg  = $_GET['msg'] ?? 'Memproses...';
$to   = $_GET['to'] ?? '../php_view/project/project_data_mahasiswa.php';

$icon = [
    'success' => '✔',
    'error'   => '✖',
    'warning' => '⚠',
    'info'    => 'ℹ'
][$type] ?? 'ℹ';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Action</title>
<meta http-equiv="refresh" content="3;url=<?= $to ?>">
<style>
body{
    background: linear-gradient(180deg,#222831,#1b2027);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family: monospace;
    color:#DFD0B8;
}
.box{
    background:#393E46;
    padding:40px;
    border-radius:20px;
    border:1px solid #948979;
    text-align:center;
    animation: pop 0.6s ease;
}
.icon{
    font-size:48px;
    margin-bottom:15px;
}
.success{color:#7CFC98}
.error{color:#FF7C7C}
.warning{color:#FFD27C}
@keyframes pop{
    from{opacity:0;transform:scale(.9)}
    to{opacity:1;transform:scale(1)}
}
small{color:#948979}
</style>
</head>
<body>

<div class="box <?= $type ?>">
    <div class="icon"><?= $icon ?></div>
    <h2><?= htmlspecialchars($msg) ?></h2>
    <small>Anda akan dialihkan otomatis...</small>
</div>

</body>
</html>

