<?php 
    function luas_lingkaran($jarijari) {
        $phi = 3.14;
        $luas = $jarijari * $jarijari * $phi;
        return number_format($luas, 2);
    }
    function keliling_lingkaran($jarijari) {
        $phi = 3.14;
        $luas = 2 * $jarijari * $phi;
        return number_format($luas, 2);
    }
    function luas_persegipanjang($panjang, $lebar) {
        $luas = $panjang * $lebar;
        return number_format($luas, 2);
    }
    function hitung_luas($batas) {
        for($i = 1; $i <= $batas; $i++) {
            $i = number_format($i,2);
            if($i % 3 === 0 && $i % 5 === 0) {
                echo luas_persegipanjang($i / 3, $i / 5). "\n";
            }
            if($i % 3  === 0) {
                echo luas_lingkaran($i / 3). "\n";
            }
            else if($i % 5 === 0) {
                echo keliling_lingkaran($i / 5). "\n";
            }else {
                echo $i."\n";
            }
        }
    }

    hitung_luas(100);
?>