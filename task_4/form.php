<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>TOWER OF GOD FANBASE</h1>
        <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required minlength="3" placeholder="Masukkan Nama Anda">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Masukkan Email Anda">
            <label for="phone">Nomor Telepon:</label>
            <input type="tel" id="phone" name="phone" required pattern="[0-9]{10,15}" placeholder="Masukkan Nomor Telepon Anda">
            <label for="role">Peran:</label>
            <select id="role" name="role" required>
                <option disabled selected value="">Pilih Peran Komunitas</option>
                <option value="Member">Member</option>
                <option value="Admin">Admin</option>
            </select>
            <label for="file">Upload File (.txt):</label>
            <input type="file" id="file" name="file" accept=".txt" required>
            <input type="submit" value="SUBMIT">
        </form>
    </div>
</body>
</html>
