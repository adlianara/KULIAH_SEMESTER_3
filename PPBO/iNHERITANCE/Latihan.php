<?php

trait BisaBayarPakaiQR{
    public function buatQRCodeBelanja()
    {
        return "Kode QR bayar Berhasil di Buat, Silahkan Scan untuk bayar; Rp" . $this->harga;
    }
}

class Produk {

    //Properti
    protected $harga;
    protected $merek;

    public function __construct($merek, $harga)
    {
        $this->merek = $merek;
        $this->harga = $harga;
    }
    public function getInfo() {
        return " Merek: " . $this->merek . " Harga: Rp " . $this->harga;
    }
}

class Makanan extends Produk {
    use BisaBayarPakaiQR;
    protected $tglKadaluarsa;

    public function __construct($merek, $harga, $tglKadaluarsa)
    {
        parent::__construct($merek, $harga);
        $this->tglKadaluarsa = $tglKadaluarsa;
    }

    public function getInfo()
    {
        $info = parent::getInfo();
        return $info . ", Exp: " . $this->tglKadaluarsa;
    }
}

class Elektronik extends Produk {
    use BisaBayarPakaiQR;
    protected $garansi;

    public function __construct($merek, $harga, $garansi)
    {
        parent::__construct($merek, $harga);
        $this->garansi = $garansi;
    }

    public function getInfo()
    {
        $info = parent::getInfo();
        return $info . ", Garansi: " . $this->garansi;
    }
}

$makanan = new Makanan("Indomie,", 4000, "12-12-26");
$elektronik = new Elektronik("Samsung,", 1000000, "2 Tahun");
echo $makanan->getInfo();
echo "<br>";
echo $elektronik->getInfo();
echo "<br>";
echo $makanan->buatQRCodeBelanja();
echo "<br>";
echo $elektronik->buatQRCodeBelanja();

?>