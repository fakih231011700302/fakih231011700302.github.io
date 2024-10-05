<?php
class Produk {
    public $nama;
    public $harga;
    public function __construct($nama, $harga) {
        $this ->nama = $nama;
        $this ->harga = $harga;
    }

    public function getNama() {
        return $this->nama;
    }
    public function setHarga($harga) {
        $this->harga = $harga;
    }
}
$produkPopok = new Produk("Popok", 10000);
echo $produkPopok->getNama();
?>