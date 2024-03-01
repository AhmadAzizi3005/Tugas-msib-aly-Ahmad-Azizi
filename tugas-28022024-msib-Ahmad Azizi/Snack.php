<?php

// Kelas Turunan (Child Class) - Snack
class Snack extends Makanan {
    private $berat;

    public function __construct($namaProduk, $harga, $berat) {
        parent::__construct($namaProduk, $harga);
        $this->berat = $berat;
    }

    public function getBerat() {
        return $this->berat;
    }

    public function tampilkan() {
        $formattedHarga = number_format($this->getHarga(), 2, ',', '.');
    
        return "Snack: {$this->getNamaProduk()}, Berat: {$this->getBerat()} gram, Harga: Rp. {$formattedHarga}";
    }
    
}
?>
