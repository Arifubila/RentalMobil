<?php
// Memulai session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Initialization</title>
</head>
<body>
    <?php
    // Deklarasi variabel session
    $_SESSION["nama_lengkap_arif"] = "arifubila";
    $_SESSION["jenisKelamin"] = "Laki-laki";
    echo "Variabel session ditetapkan.";
    ?>
</body>
</html>