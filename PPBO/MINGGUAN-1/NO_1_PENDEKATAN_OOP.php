<?php
// Pendekatan OOP Menghitung Luas Persegi Panjang

class PersegiPanjang {
    public $panjang;
    public $lebar;

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
        }
}

$persegiPanjang = new PersegiPanjang();
$persegiPanjang->panjang = 10;
$persegiPanjang->lebar = 5;

echo "Panjang: " . $persegiPanjang->panjang . "<br>";
echo "Lebar: " . $persegiPanjang->lebar . "<br>";
echo "Luas Persegi Panjang: " . $persegiPanjang->hitungLuas();

?>