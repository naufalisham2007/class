<?php 
require_once ("content.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $sekolah ?></title>
</head>
<body>
    <h1><?= $judul; ?></h1>
    <p><?= $isi; ?></p>
    <hr>
    <h1>jadwal pelajaran RPL tahun 2024/2025</h1>
    <table border= "3">
        <thead>
            <tr>
                <th><?= $hari[0]; ?></th>
                <th><?= $hari[1]; ?></th>
                <th><?= $hari[2]; ?></th>
                <th><?= $hari[3]; ?></th>
                <th><?= $hari[4]; ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $pelajaran[0];?></td>
                <td><?= $pelajaran[0];?></td>
                <td><?= $pelajaran[1];?></td>
                <td><?= $pelajaran[1];?></td>
                <td><?= $pelajaran[1];?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[1];?></td>
                <td><?= $pelajaran[4];?></td>
                <td><?= $pelajaran[5];?></td>
                <td><?= $pelajaran[5];?></td>
                <td><?= $pelajaran[5];?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[8];?></td>
                <td><?= $pelajaran[8];?></td>
                <td><?= $pelajaran[8];?></td>
                <td><?= $pelajaran[8];?></td>
                <td><?= $pelajaran[8];?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>