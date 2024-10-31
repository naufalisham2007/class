<?php 
    $identitas = ["Nama"=>"Naufal Isham Putra", 
                  "Alamat"=>"sidoarjo,buduran", 
                  "Telepon"=>"082143355908", 
                  "Email"=>"taufanpratamata@gmail.com",
                  "instagram"=>"inxfalqx",
                  "titkok"=>"inxfalqx"];

    $sekolah = ["TK"=>"TK Tunas Cita",
                "SD"=>"SDN sidokerto",
                "SMP"=>"SMP pgri 1 buduran",
                "SMK"=>"SMKN 2 buduran"];

    $hobi = ["band", "gitaran", "game"];

    $skill = ["C++"=>"expert",
              "Html"=>"newbie",
              "Css"=>"intermediete",
              "php"=>"newbie"];
    $dekskripsi = "saya adalah seorang murid di smkn 2 buduran, <br> 
    saya mengikuti ekstrakulikuler, <br>
    saya ingin membuat band agar kaya raya, dan masuk surganya Allah SWT, Amin <br>
    saya pacarnya angel <br>
    saya punya teman namanya icank <br>
    saya rumahnya di sono";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Riwayat Hidup</title>
    <style>.container margin-left</style>
</head>
<body>
    <div class="container">
        <h1>DAFTAR RIWAYAT HIDUP</h1>
        <h2>Data Diri</h2>
        <table border= "3">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Dekskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($identitas as $key => $value) {
                    ?>
                    <tr>
                        <td><?=$key ?></td>
                        <td><?=$value ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Riwayat Pendidikan</h2>
        <table border = "3px">
            <thead>
                <tr>
                    <th>Pendidikan</th>
                    <th>Nama Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($sekolah as $key => $value) {
                    ?>
                    <tr>
                        <td><?=$key ?></td>
                        <td><?=$value ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Skill coding</h2>
        <table border = "3px">
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($skill as $key => $value) {
                    ?>
                    <tr>
                        <td><?=$key ?></td>
                        <td><?=$value ?></td>
                    </tr>
                    <?php
                } 
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Hobi</h2>
        <ul>
            <?php 
            foreach ($hobi as $key) {
                ?>
                <li><?=$key ?></li>
                <?php
            }
            ?>
        </ul>
        <hr>
        <h2>Tentang Aku</h2>
        <p><?=$dekskripsi?></p>
    </div>
</body>
</html>

