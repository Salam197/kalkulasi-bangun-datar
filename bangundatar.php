<?php

class BangunDatar 
{
    public $phi;

    public function __construct()
    {
        $this->phi = 3.14; 
    }

    public function persegi($sisi)
    {
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "Argumen : Sisi = $sisi <br>";
        echo "Luas Persegi = $luas <br>";
        echo "Keliling Persegi = $keliling <br><br>";
    }

    public function persegiPanjang($panjang, $lebar)
    {
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "Argumen : Panjang = $panjang, Lebar = $lebar <br>";
        echo "Luas Persegi Panjang = $luas <br>";
        echo "Keliling Persegi Panjang = $keliling <br><br>";
    }

    public function segitiga($alas, $tinggi, $sisi1, $sisi2, $sisi3)
    {
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $sisi1 + $sisi2 + $sisi3;

        echo "Argumen : Alas = $alas, Tinggi = $tinggi, Sisi1 = $sisi1, Sisi2 = $sisi2, Sisi3 = $sisi3 <br>";
        echo "Luas Segitiga = $luas <br>";
        echo "Keliling Segitiga = $keliling <br><br>";
    }

    public function lingkaran($jari_jari)
    {
        $luas = $this->phi * $jari_jari * $jari_jari;
        $keliling = 2 * $this->phi * $jari_jari;

        echo "Argumen : Jari-jari = $jari_jari <br>";
        echo "Luas Lingkaran = $luas <br>";
        echo "Keliling Lingkaran = $keliling <br><br>";
    }

    public function trapesium($sisi1, $sisi2, $tinggi)
    {
        $luas = 0.5 * ($sisi1 + $sisi2) * $tinggi;
        $keliling = $sisi1 + $sisi2 + 2 * sqrt(pow(($sisi2 - $sisi1) / 2, 2) + pow($tinggi, 2));

        echo "Argumen : Sisi1 = $sisi1, Sisi2 = $sisi2, Tinggi = $tinggi <br>";
        echo "Luas Trapesium = $luas <br>";
        echo "Keliling Trapesium = $keliling <br><br>";
    }
}

$bangunDatar = new BangunDatar();

$bangunDatar->persegi(5);
$bangunDatar->persegiPanjang(4, 6);
$bangunDatar->segitiga(3, 4, 5, 6, 7);
$bangunDatar->lingkaran(7);    
$bangunDatar->trapesium(4, 6, 5);

?>