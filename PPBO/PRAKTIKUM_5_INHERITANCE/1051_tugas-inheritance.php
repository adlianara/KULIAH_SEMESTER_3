<?php
// PRAKTIKUM MINGGUAN 5
// tugas 1_inherintance
// ADLI ANARA SOFIAN_1051

// parent class
class Produk{
    protected $merek;
    protected $harga;

    public function __construct($merek, $harga){
        if ($harga <= 0){
            die("HARGA HARUS LEBIH DARI 0");
        }

        $this->merek = $merek;
        $this->harga = $harga;
    }

    public function getInfo(){
        echo "Merek: " . $this->merek . "<br>";
        echo "Harga: " . number_format($this->harga, 0, ',', '.') . "<br>";
    }
}

// child class makanan
class Makanan extends Produk{
    private $tanggalKadaluarsa;

    public function __construct($merek, $harga, $tanggalKadaluarsa){
        parent::__construct($merek, $harga);
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    public function getInfo(){
        echo "Produk: Makanan - Mie Instan" . "<br>";
        echo "Merek: " . $this->merek . "<br>";
        echo "Harga: " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Tanggal Kadaluarsa: " . $this->tanggalKadaluarsa . "<br>";
        echo "Status: Segar" . "<br>";
        echo "<br>";
    }
}

// child class electronik
class Elektronik extends Produk{
    private $garansi;

    public function __construct($merek, $harga, $garansi){
        parent::__construct($merek, $harga);
        $this->garansi = $garansi;
    }

    public function getInfo(){
        echo "Produk: Elektronik - Smart TV" . "<br>";
        echo "Merek: " . $this->merek . "<br>";
        echo "Harga: " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Garansi: " . $this->garansi . "<br>";
    }
}

// membuat objek makanan
$makanan = new Makanan("Indomie", 3500, "2026-12-15");

// membuat objek elektronik
$elektronik = new Elektronik("Samsung", 5000000, "2 Tahun");

// menampilkan informasi makanan
$makanan->getInfo();

// menampilkan informasi elektronik
$elektronik->getInfo();

?>