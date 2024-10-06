<form action="" method="post">
    <input type="number" name="bulan" placeholder="Masukkan Bulan">
    <input type="number" name="tanggal" placeholder="Masukkan Tanggal">
    <input type="submit" value="kirim" name="tombol">
</form>

<?php 
    if (isset($_POST["tombol"])) {
        $bulan = $_POST["bulan"];
        $tanggal = $_POST["tanggal"];

        //echo $bulan;
        //echo $tanggal;

        $keterangan = "salah";

        if ($bulan > 0 && $bulan < 13 && $tanggal > 0 && $tanggal < 32) {
            //$keterangan = "benar";
            if ($bulan == 2) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "aquariius";
                }

                if ($tanggal >19 && $tanggal <32) {
                    $keterangan = "capicorn"; 
                }
            }
            
        }

        echo $keterangan;
    }

?>