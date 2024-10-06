<?php 
    // Loop to print numbers from 0 to 9
    for ($i = 0; $i < 10; $i++) { 
        echo $i;
    }
    echo "<br>";

    // Loop to print numbers from 10 to 0
    for ($i = 10; $i >= 0; $i--) { 
        echo $i;
    }
    echo "<br>";

    // Check if 4 is odd or even (should be 0 as 4 is even)
    $ganjil = 4 % 2;
    echo $ganjil;
    echo "<br>";

    // Print odd numbers from 1 to 99
    for ($i = 1; $i < 100; $i++) { 
        $ganjil = $i % 2;
        if ($ganjil == 1) {
            echo $i;
        }
    }
    echo "<br>";

    // Determine pass or fail based on nilai and kkn
    $kkn = 80;
    $nilai = 75;
    if ($nilai > $kkn) {
        echo "lulus";
    } else {
        echo "tidak lulus";
    }
    echo "<br>";

    // Update status based on nilai and kkn
    $status = "tidak lulus";
    if ($nilai > $kkn) {
        $status = "lulus";
    }
    echo $status;
    echo "<br>";

    // Set raport value based on tugas
    $raport = 0;
    $tugas = 0;
    if ($tugas == 1) {
        $raport = 80;
    }
    echo $raport;
    echo "<br>";

    // Determine zodiac sign based on month and date
    $bulan = 12;
    $tanggal = 5;

    $keterangan = "salah";

    if ($bulan >= 1 && $bulan <= 12) {
        if ($tanggal > 0 && $tanggal <= 31) {
            if ($bulan == 1) {
                if ($tanggal <= 19) {
                    $keterangan = "aquarius";
                } else {
                    $keterangan = "capricorn";
                }
            } elseif ($bulan == 2) {
                if ($tanggal <= 18) {
                    $keterangan = "aquarius";
                } else {
                    $keterangan = "pisces";
                }
            } elseif ($bulan == 3) {
                if ($tanggal <= 20) {
                    $keterangan = "pisces";
                } else {
                    $keterangan = "aries";
                }
            } elseif ($bulan == 4) {
                if ($tanggal <= 19) {
                    $keterangan = "aries";
                } else {
                    $keterangan = "taurus";
                }
            } elseif ($bulan == 5) {
                if ($tanggal <= 20) {
                    $keterangan = "taurus";
                } else {
                    $keterangan = "gemini";
                }
            } elseif ($bulan == 6) {
                if ($tanggal <= 20) {
                    $keterangan = "gemini";
                } else {
                    $keterangan = "cancer";
                }
            } elseif ($bulan == 7) {
                if ($tanggal <= 22) {
                    $keterangan = "cancer";
                } else {
                    $keterangan = "leo";
                }
            } elseif ($bulan == 8) {
                if ($tanggal <= 22) {
                    $keterangan = "leo";
                } else {
                    $keterangan = "virgo";
                }
            } elseif ($bulan == 9) {
                if ($tanggal <= 22) {
                    $keterangan = "virgo";
                } else {
                    $keterangan = "libra";
                }
            } elseif ($bulan == 10) {
                if ($tanggal <= 22) {
                    $keterangan = "libra";
                } else {
                    $keterangan = "scorpio";
                }
            } elseif ($bulan == 11) {
                if ($tanggal <= 21) {
                    $keterangan = "scorpio";
                } else {
                    $keterangan = "sagitarius";
                }
            } elseif ($bulan == 12) {
                if ($tanggal <= 21) {
                    $keterangan = "sagitarius";
                } else {
                    $keterangan = "capricorn";
                }
            }
        }
    }

    echo $keterangan;
?>
