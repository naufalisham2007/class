<?php
require_once ("content");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>judul</title>
</head>
<body>
    <img src="images/<?= $gambar; ?>" alt="">
    <img src="images/<?= $gambar[2]; ?>" alt="">
    <?php
    foreach ($gambars as $key) {
        echo <h1>Gambar</h1>;
        echo "<img src='images/$key' alt=''>";
    }
    ?>
</body>
</html>