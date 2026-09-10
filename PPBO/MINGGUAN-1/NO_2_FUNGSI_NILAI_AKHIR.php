<?php
// Fungsi Menghitung Nilai Akhir

function hitungNilaiAkhir($uts, $uas, $tugas) {
    $nilaiAkhir = ($uts * 0.3) + ($uas * 0.4) + ($tugas * 0.3);

    return (float) $nilaiAkhir;
}

$uts = 80;
$uas = 85;
$tugas = 90;

$nilaiAkhir = hitungNilaiAkhir($uts, $uas, $tugas);

echo "Nilai UTS: $uts <br>";
echo "Nilai UAS: $uas <br>";
echo "Nilai Tugas: $tugas <br>";
echo "Nilai Akhir: $nilaiAkhir";

?>