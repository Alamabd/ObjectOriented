<?php

class Produk {
    protected $nama, $harga_asli, $diskon;
    public function __construct($nama, $harga_asli, $diskon) {
        $this->nama = $nama;
        $this->harga_asli = $harga_asli;
        $this->diskon = $diskon;
        
        $harga_akhir = $this->harga_asli - ( $this->harga_asli *0.05 );
        echo "Nama                  : $this->nama\n";
        echo "Harga Asli            : Rp $this->harga_asli\n";
        echo "Diskon                : $this->diskon%\n";
        echo "Harga Setalah Diskon  : Rp $harga_akhir\n";
    }

    public function getInfo() {
        return "(Produk Biasa)\n";
    }
}

class ProdukPremium extends Produk {
    public function getInfo() {
        return "(Produk Premium🔥)\n";
    }
}

// Data
// Ebook PHP - Rp 30.000 - Diskon 5% (Produk Biasa)
// Video Cource PHP - Rp 150.000- Diskon 5% (Produk Premium)
// Template Desain - Rp 200.000 - Diskon 5% (Produk Premium)

// Hasil
// nama, harga asli, diskon, harga setelah diskon, (produk premium | produk biasa)

$produk1 = new Produk("Ebook PHP", 30000, 5);
echo $produk1->getInfo();
echo "\n";
$produk2 = new ProdukPremium("Video Course PHP", 150000, 5);
echo $produk2->getinfo();
echo "\n";
$produk3 = new ProdukPremium("Template Desain", 200000, 5);
echo $produk3->getInfo();
echo "\n";



