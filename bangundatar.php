<?php

// 1. Wajib dibungkus di dalam sebuah Class
class BangunDatar 
{
    public $phi;

    // 2. Parameter pada construct dihapus karena nilai phi di-set manual (hardcoded)
    public function __construct()
    {
        // 3. Hapus tanda $ pada angka 3.14
        $this->phi = 3.14; 
    }

    public function persegi($sisi)
    {
        // 4. Tambahkan operator * (bintang) untuk perkalian
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "Argumen : Sisi = $sisi <br>";
        echo "Luas Persegi = $luas <br>";
        echo "Keliling Persegi = $keliling <br><br>";
    }

    public function persegiPanjang($panjang, $lebar)
    {
        // Tambahkan operator *
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "Argumen : Panjang = $panjang, Lebar = $lebar <br>";
        echo "Luas Persegi Panjang = $luas <br>";
        echo "Keliling Persegi Panjang = $keliling <br><br>";
    }

    public function segitiga($alas, $tinggi, $sisi1, $sisi2, $sisi3)
    {
        // Tambahkan operator *
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $sisi1 + $sisi2 + $sisi3;

        echo "Argumen : Alas = $alas, Tinggi = $tinggi, Sisi1 = $sisi1, Sisi2 = $sisi2, Sisi3 = $sisi3 <br>";
        echo "Luas Segitiga = $luas <br>";
        echo "Keliling Segitiga = $keliling <br><br>";
    }

    public function lingkaran($jari_jari)
    {
        // Tambahkan operator *
        $luas = $this->phi * $jari_jari * $jari_jari;
        $keliling = 2 * $this->phi * $jari_jari;

        echo "Argumen : Jari-jari = $jari_jari <br>";
        echo "Luas Lingkaran = $luas <br>";
        echo "Keliling Lingkaran = $keliling <br><br>";
    }

    public function trapesium($sisi1, $sisi2, $tinggi)
    {
        // Tambahkan operator * pada 0.5 dan 2
        $luas = 0.5 * ($sisi1 + $sisi2) * $tinggi;
        
        // Asumsi ini adalah trapesium sama kaki untuk rumus kelilingnya
        $keliling = $sisi1 + $sisi2 + 2 * sqrt(pow(($sisi2 - $sisi1) / 2, 2) + pow($tinggi, 2));

        echo "Argumen : Sisi1 = $sisi1, Sisi2 = $sisi2, Tinggi = $tinggi <br>";
        echo "Luas Trapesium = $luas <br>";
        echo "Keliling Trapesium = $keliling <br><br>";
    }
}

// Instansiasi class
$bangunDatar = new BangunDatar();

// Eksekusi fungsi-fungsinya
$bangunDatar->persegi(5);
$bangunDatar->persegiPanjang(4, 6);
$bangunDatar->segitiga(3, 4, 5, 6, 7);
$bangunDatar->lingkaran(7);    
$bangunDatar->trapesium(4, 6, 5);

?>