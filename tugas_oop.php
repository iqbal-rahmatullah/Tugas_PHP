<?php
    class Descriptor {
        public static function describe($bangun_datar) {
            switch($bangun_datar) {
                case $bangun_datar instanceof Lingkaran :
                    echo "Bangun datar ini adalah lingkaran ";
                    break;
                case $bangun_datar instanceof Persegi :
                    echo "Bangun datar ini adalah persegi ";
                    break;
                case $bangun_datar instanceof PersegiPanjang :
                    echo "Bangun datar ini adalah persegi panjang ";
                    break;
                default :
                    echo "Terdapat kesalahan dalam bangun datar";
                    return;
                    break;
            }
            $luas = $bangun_datar->area();
            $keliling = $bangun_datar->circumference();
            echo "yang memiliki luas $luas dan keliling $keliling\n";
        }
    }
    class Lingkaran{
        public $jari_jari;

        public function __construct($jari_jari) {
            $this->jari_jari = $jari_jari;
        }
        public function area() {
            $luas = $this->jari_jari * $this->jari_jari * 3.14;
            return $luas;
        }
        public function circumference() {
            $keliling = 2 * $this->jari_jari * 3.14;
            return $keliling;
        }
        public function enlarge($scale) { 
             $this->jari_jari * $scale;
        }
        public function shrink($scale) {
             $this->jari_jari / $scale;
        }
    }
    class Persegi{
        public $sisi;

        public function __construct($sisi) {
            $this->sisi = $sisi;
        }
        public function area() {
            $luas = $this->sisi * $this->sisi;
            return $luas;
        }
        public function circumference() {
            $keliling = 4 * $this->sisi;
            return $keliling;
        }
        public function enlarge($scale) { 
             $this->sisi * $scale;
        }
        public function shrink($scale) {
             $this->sisi / $scale;
        }
    }
    class PersegiPanjang{
        public $panjang;
        public $lebar;

        public function __construct($panjang, $lebar) {
            $this->panjang = $panjang;
            $this->lebar =  $lebar;
        }
        public function area() {
            $luas = $this->panjang * $this->lebar;
            return $luas;
        }
        public function circumference() {
            $keliling = 2 * ($this->panjang + $this->lebar);
            return $keliling;
        }
        public function enlarge($scale) { 
             $this->panjang * $scale;
             $this->lebar * $scale;
        }
        public function shrink($scale) {
             $this->panjang / $scale;
             $this->lebar / $scale;
        }
    }

    $lingkaran = new Lingkaran(3);
    $persegi = new Persegi(5);
    $persegi_panjang = new PersegiPanjang(2,4);
    Descriptor::describe($lingkaran);
    Descriptor::describe($persegi);
    Descriptor::describe($persegi_panjang);
?>