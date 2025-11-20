<?php
class Segitiga {
    public $alas;
    public $tinggi;
    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function luas() {
        return 1/2 * $this->alas * $this->tinggi;
    }
}

$segitiga = new Segitiga(10, 20);
echo $segitiga->luas() . "\n";
