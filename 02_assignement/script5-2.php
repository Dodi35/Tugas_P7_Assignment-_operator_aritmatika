<html>
    <head>
        <title>Menghitung Gaji Bersih Karyawan</title>
    </head>
    <body>
        <h1>Menghitung Gaji Bersih Karyawan</h1>
        <?php
        /*
        Script ini akan nenghitung gaji bersih karyawan yang dirumuskan dengan
        Gaji Bersih = Gaji Pokok + tunjangan - pajak;
        Misalkan Gaji pokoknya Rp. 1.000.000, tunjangan Rp. 500.000 dan
        pajaknya 15% dari (gaji kotor = gaji pokok + tunjangan)
        Berikut ini ada beberapa cara pembuatan script yang akan menghasilkan
        output yang sama
        */
        // CARA KE - 1
        $gajiPokok = 1000000; // gaji pokok
        $tunjangan = 500000; // tunjangan
        $gajikotor = $gajiPokok + $tunjangan; // hitung gaji kotor
        $pajak = 0.15 * $gajikotor; // hitung pajak
        $gajiBersih = $gajiPokok + $tunjangan - $pajak; //hitung gaji bersih
        echo "<p>Gaji besih karyawan adalah Rp. ".$gajihBersih.</p>; // menampilkan gaji bersih
        // CARA KE -2 
        $gajiPokok = 1000000; // Gaji pokok
        $tunjangan = 500000; // tunjangan 
        $gajikotor = $gajiPokok + $tunjangan; //hitung gaji kotor
        $gajiBersih = $gajikotor - (0.15 * $gajikotor); // hitung gaji bersih
        echo "<p>Gaji besih karyawan adalah Rp. ".$gajihBersih.</p>; // menampilkan gaji bersih
        // CARA KE - 3
        $gajiPokok = 1000000; // gaji pokok
        $tunjangan = 500000; // tunjangan
        $gajiBersih = $gajiPokok + $tunjangan - 0.15 * ($gajiPokok +
        $tunjangan); // hitung gaji bersih
        echo "<p>Gaji besih karyawan adalah Rp. ".$gajihBersih.</p>; // menampilkan gaji bersih
        ?>
    </body>
</html>