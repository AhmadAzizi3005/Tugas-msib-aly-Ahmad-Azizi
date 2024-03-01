<?php

// Interface untuk Produk Makanan
interface ProdukMakanan {
    public function getNamaProduk();
    public function getHarga();
}

// Kelas Dasar (Parent Class)
class Makanan implements ProdukMakanan {
    protected $namaProduk;
    protected $harga;

    public function __construct($namaProduk, $harga) {
        $this->namaProduk = $namaProduk;
        $this->harga = $harga;
    }

    public function getNamaProduk() {
        return $this->namaProduk;
    }

    public function getHarga() {
        return $this->harga;
    }
}
?>
