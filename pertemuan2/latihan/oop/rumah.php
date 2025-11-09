<?php

//definisi Class Rumah
class Rumah {
    //property
    public $warna;
    public $alamat;

    public function __construct( $warna, $alamat) {
        $this->warna = $warna;
        $this->alamat = $alamat;
    }
}

function pasangLisrik( Rumah $dataRumah) {
    return "Listrik sedang dipasang di rumah " . $dataRumah->warna . " yang beralamat di " . $dataRumah->alamat;
}

$rumahSaya = new Rumah("merah", "jln. merdeka No. 10");


echo pasangLisrik($rumahSaya);
echo "<br>";

$teksBiasa = "ini cuma string";
?>