<?php
// Tugas 2 (TG04): Class Product

class Product
{
    // Property
    public $nama;
    public $harga;
    public $kategori;

    // Constructor
    public function __construct($nama, $harga, $kategori)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->kategori = $kategori;
    }

    // Method getInfo()
    public function getInfo()
    {
        return "Produk: $this->nama, Harga: Rp " .
               number_format($this->harga, 0, ',', '.') .
               ", Kategori: $this->kategori";
    }

    // Method applyDiskon()
    public function applyDiskon($persen)
    {
        $this->harga = $this->harga - ($this->harga * $persen / 100);
    }
}

// Membuat 2 objek Product
$produk1 = new Product(
    "Laptop Asus",
    12000000,
    "Elektronik"
);

$produk2 = new Product(
    "Mouse Logitech",
    300000,
    "Aksesoris"
);

// Menampilkan informasi sebelum diskon
echo $produk1->getInfo() . "<br>";
echo $produk2->getInfo() . "<br>";

echo "<br>";

// Memberikan diskon
$produk1->applyDiskon(10);
$produk2->applyDiskon(20);

// Menampilkan informasi setelah diskon
echo $produk1->getInfo() . "<br>";
echo $produk2->getInfo() . "<br>";

?>