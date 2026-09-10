<?php
// Pendekatan Prosedural Menghitung Luas Persegi Panjang

$panjang = 10;
$lebar = 5;

function hitungLuas($panjang, $lebar) {
    return $panjang * $lebar;
}

$luas = hitungLuas($panjang, $lebar);

echo "Panjang: $panjang <br>";
echo "Lebar: $lebar <br>";
echo "Luas Persegi Panjang: $luas";
?>