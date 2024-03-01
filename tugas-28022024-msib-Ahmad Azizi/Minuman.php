<?php

// Kelas Turunan (Child Class) - Minuman
class Minuman extends Makanan {
    private $volume;

    public function __construct($namaProduk, $harga, $volume) {
        parent::__construct($namaProduk, $harga);
        $this->volume = $volume;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function tampilkan() {
        $formattedHarga = number_format($this->getHarga(), 2, ',', '.');
        return "Minuman: {$this->getNamaProduk()}, Volume: {$this->getVolume()} ml, Harga: Rp. {$formattedHarga}";
    }
}
?>
