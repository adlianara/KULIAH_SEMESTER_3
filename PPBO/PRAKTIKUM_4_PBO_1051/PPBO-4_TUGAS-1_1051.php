<?php

// PPBO_4_Tugas-1_1051.php
// Nama: Adli Anara Sofian
// NIM: H1101251051

class Mobil {
    // Property dibuat private
    private $merek;
    private $warna;
    private $kecepatan;

    // Constructor
    public function __construct($merek, $warna, $kecepatan){
        $this->merek = $merek;
        $this->setWarna($warna);
        $this->setKecepatan($kecepatan);
    }

    // Getter merek
    public function getMerek(){
        return $this->merek;
    }

    // Getter warna
    public function getWarna(){
        return $this->warna;
    }

    // Getter kecepatan
    public function getKecepatan(){
        return $this->kecepatan;
    }

    // Setter warna dengan validasi
    public function setWarna($warna){
    if ($warna == "") {
        echo "Warna tidak boleh kosong.";
    } else {
        $this->warna = $warna;
    }
    }

    // Setter kecepatan dengan validasi
    public function setKecepatan($kecepatan){
        if ($kecepatan < 0) {
            echo "Kecepatan tidak boleh negatif.";
            return;
        }

        if ($kecepatan > 200) {
            echo "Kecepatan maksimal 200 km/jam.";
            return;
        }

        $this->kecepatan = $kecepatan;
    }

    // Method getInfo
    public function getInfo(){
        return "Mobil " . $this->merek .
               " berwarna " . $this->warna .
               ", kecepatan " . $this->kecepatan .
               " km/jam";
    }
}


// Membuat objek Mobil
$mobil = new Mobil("Toyota", "Merah", 100);

// Menampilkan informasi
echo $mobil->getInfo() . "<br>";


// Mengubah kecepatan
$mobil->setKecepatan(150);

echo "Kecepatan setelah diubah: " . $mobil->getKecepatan() . " km/jam<br>";

// Mengubah warna
$mobil->setWarna("Hitam");

echo "Warna setelah diubah: " . $mobil->getWarna();

?>