<?php
class Produk {
    private $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judulBaru ) {
        $this->judul = $judulBaru;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

$produk1 = new Produk();
$produk1->setJudul('Goku');
echo $produk1->getInfoProduk();
echo $produk1->getJudul();
?>