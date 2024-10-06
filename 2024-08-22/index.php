<?php
   require_once"content.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web sekolah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>ini adalah header</h1>
        <li><a href="index.php">home</a></li>
        <li><a href="pages/jurusan.php">jurusan</a></li>
        <li><a href="pages/sejarah.php">sejarah</a></li>
        <li><a href="pages/kontak.php">kontak</a></li>
        <li><a href="pages/prestasi.php">Prestasi</a></li>
    </div>
    <div class="content">
        <h1>ini adalah content</h1>
        <?php
        $page = $_GET["page"];
        echo $page;
        if ($page == "kontak"){
            require_once ('pages/kontak.php');
        }
        if ($page == "kontak"){
            require_once ('pages/sejarah.php');
        }
        if ($page == "kontak"){
            require_once ('pages/jurusan.php');
        }
        require_once "pages/jurusan.php"
        ?>
    </div>
    <div class="footer">
        <h1>ini adalah footer</h1>
    </div>
    <?php
        foreach ($pages as $key => $value) {
           
        }
        ?>
        <li><a href="pages/<?= $value?>"><?= $key?>home</a></li>
        <?php

?>        
    <ul>
    </ul>

    <?php
       foreach ($gambars as $key => $value){
    ?>

    <img src="images/carhart.png" alt="" >
    <img src="images/<?= $key?>" alt="">
    <?php 
       }
    ?>
    <img src="images/nike.png" alt="" srcset="">
</body>
</html>