<?php

// 1. ABSTRACT CLASS dengan CONSTRUCTOR
abstract class Hewan {
    protected $nama;
    protected $umur;

    // Constructor di dalam Abstract Class
    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // Method abstrak (wajib di-override oleh class anak)
    abstract public function bersuara();

    // Method normal yang langsung bisa diwarisi
    public function getInfo() {
        return "Nama: {$this->nama}, Umur: {$this->umur} tahun";
    }
}

// 2. EXTENDS (Pewarisan dari Abstract Class)
class Kucing extends Hewan {
    private $warnaBulu;

    // Subclass memiliki constructor sendiri
    public function __construct($nama, $umur, $warnaBulu) {
        // Memanggil constructor milik parent (Hewan) untuk mengisi data nama & umur
        parent::__construct($nama, $umur);

        // Mengisi properti khusus milik Kucing
        $this->warnaBulu = $warnaBulu;
    }

    // 3. WAJIB mengimplementasikan method abstrak dari parent
    public function bersuara() {
        return "Meong! Meong!";
    }

    public function getWarnaBulu() {
        return $this->warnaBulu;
    }
}

// --- CONTOH EKSEKUSI ---

// Kita tidak bisa menulis: $hewan = new Hewan("Binatang", 2); (Akan Error karena Abstract)

// Tapi kita bisa membuat objek dari class anak (Kucing) yang meng-extends Hewan:
$kucingSaya = new Kucing("Milo", 2, "Oranye");

// Menjalankan method dari parent (melalui inheritance)
echo $kucingSaya->getInfo() . "\n";
// Output: Nama: Milo, Umur: 2 tahun

// Menjalankan method khusus subclass & implementasi polimorfisme/abstraksi
echo "Warna Bulu: " . $kucingSaya->getWarnaBulu() . "\n";
echo "Suara: " . $kucingSaya->bersuara() . "\n";
// Output: Suara: Meong! Meong!
