<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>
    <?php
    // Mengubah nilai variabel session yang sudah ada
    $_SESSION["nama_lengkap_arif"] = "Arifubila Ramadhani";
    echo $_SESSION["nama_lengkap_arif"];
    ?>
</body>
</html>