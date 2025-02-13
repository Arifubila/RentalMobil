<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Display</title>
</head>
<body>
    <?php
    // Menampilkan informasi dari variabel session
    echo "Nama saya adalah " . htmlspecialchars($_SESSION["nama_lengkap_arif"]) . "<br>";
    echo "Jenis kelamin: " . htmlspecialchars($_SESSION["jenisKelamin"]) . ".";
    ?>
</body>
</html>