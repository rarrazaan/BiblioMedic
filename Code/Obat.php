<?php

class Obat {
    public $nama;
    public $komposisi;
    public $khasiat;
    public $aturanPakai;
    public $peringatan;
    
    function set_nama($nama) {
        $this->nama = $nama;
    }
    function get_nama() {
        return $this->nama;
    }
    function set_komposisi($komposisi) {
        $this->komposisi = $komposisi;
    }
    function get_komposisi() {
        return $this->komposisi;
    }
    function set_khasiat($khasiat) {
        $this->khasiat = $khasiat;
    }
    function get_khasiat() {
        return $this->khasiat;
    }
    function set_aturanPakai($aturanPakai) {
        $this->aturanPakai = $aturanPakai;
    }
    function get_aturanPakai() {
        return $this->aturanPakai;
    }
    function set_peringatan($peringatan) {
        $this->peringatan = $peringatan;
    }
    function get_peringatan() {
        return $this->peringatan;
    }

    public function tampilObat(){
        echo "Nama: " . $obat->get_nama();
        echo "<br>";
        echo "Komposisi: " . $obat->get_komposisi();
        echo "<br>";
        echo "Khasiat: " . $obat->get_khasiat();
        echo "<br>";
        echo "Aturan Pakai: " . $obat->get_aturanPakai();
        echo "<br>";
        echo "Peringatan Obat: " . $obat->get_peringatan();
    }

}

$Obat = new Obat; // deklarasi obyek
echo $Obat->tampilObat();

?>