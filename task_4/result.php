<?php
session_start();
if (!isset($_SESSION['formData'])) {
    header("Location: form.php");
    exit();
}
$formData = $_SESSION['formData'];
$browser = $_SERVER['HTTP_USER_AGENT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>TOWER OF GOD FANBASE</h1>
        <table>
            <tr><th>Nama</th><td><?= $formData['name'] ?></td></tr>
            <tr><th>Email</th><td><?= $formData['email'] ?></td></tr>
            <tr><th>Nomor Telepon</th><td><?= $formData['phone'] ?></td></tr>
            <tr><th>Divisi</th><td><?= $formData['role'] ?></td></tr>
            <tr><th>Browser/OS</th><td><?= $browser ?></td></tr>
        </table>
        <h2>Isi File:</h2>
        <table>
            <tr><th>Baris</th><th>Konten</th></tr>
            <?php foreach ($formData['fileContents'] as $index => $line): ?>
            <tr><td><?= $index + 1 ?></td><td><?= $line ?></td></tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
