<?php
// Tugas 1 (TG03): Class Mobil

class Mobil {

    // Properti
    public $merek;
    public $warna;
    public $kecepatan;

    // Constructor
    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    // Method getInfo()
    public function getInfo() {
        return "Mobil $this->merek berwarna $this->warna dengan kecepatan $this->kecepatan km/jam";
    }

    // Method jalankan()
    public function jalankan() {
        return "Mobil berjalan...";
    }

    // Method berhenti()
    public function berhenti() {
        return "Mobil berhenti.";
    }
}

// Membuat 3 objek
$mobil1 = new Mobil("Toyota Avanza", "Merah", 80);
$mobil2 = new Mobil("Honda", "Hitam", 100);
$mobil3 = new Mobil("Suzuki", "Putih", 60);

// Menampilkan informasi
echo $mobil1->getInfo() . "<br>";
echo $mobil1->jalankan() . "<br>";
echo $mobil1->berhenti() . "<br>";

echo "<br>";

echo $mobil2->getInfo() . "<br>";
echo $mobil2->jalankan() . "<br>";
echo $mobil2->berhenti() . "<br>";

echo "<br>";

echo $mobil3->getInfo() . "<br>";
echo $mobil3->jalankan() . "<br>";
echo $mobil3->berhenti() . "<br>";

?>