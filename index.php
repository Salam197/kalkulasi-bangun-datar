<?php

class Buku
{
    public $judul;
    public $penulis;
    public $tahun_terbit;

    public function tampilkanInfo()
    {
        return "Judul: " . $this->judul . ", Penulis: " . $this->penulis . ", Tahun Terbit: " . $this->tahun_terbit;
    }
}

$buku1 = new Buku();
$buku1->judul = "Pemograman PHP";
$buku1->penulis = "Aria";
$buku1->tahun_terbit = 2020;

echo $buku1->tampilkanInfo();

$buku2 = new Buku();
$buku2->judul = "Paham Dasar Dasar Basis Data";
$buku2->penulis = "Yusuf";
$buku2->tahun_terbit = 2019;

echo $buku2->tampilkanInfo();
?>