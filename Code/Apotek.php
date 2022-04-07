<?php

class Apotek {
    public $nama;
    public $alamat;
    public $jamOperasi;
    public $picture;
    public $noTelp;
    
    function set_nama($nama) {
        $this->nama = $nama;
    }
    function get_nama() {
        return $this->nama;
    }
    function set_alamat($alamat) {
        $this->alamat = $alamat;
    }
    function get_alamat() {
        return $this->alamat;
    }
    function set_jamOperasi($jamOperasi) {
        $this->jamOperasi = $jamOperasi;
    }
    function get_jamOperasi() {
        return $this->jamOperasi;
    }
    function set_picture($picture) {
        $this->picture = $picture;
    }
    function get_picture() {
        return $this->picture;
    }
    function set_noTelp($noTelp) {
        $this->noTelp = $noTelp;
    }
    function get_noTelp() {
        return $this->noTelp;
    }

    public function tampilDataApotek(){
        echo "Nama: " . $apotek->get_nama();
        echo "<br>";
        echo "Alamat: " . $apotek->get_alamat();
        echo "<br>";
        echo "Jam Operasi: " . $apotek->get_jamOperasi();
        echo "<br>";
        $apotek->get_picture();
        echo "<br>";
        echo "No. Telp: " . $apotek->get_noTelp();
    }

    public function tampilObatTersedia(){
    }
}

$apotek = new Apotek; // deklarasi obyek
echo $apotek->tampilDataApotek();
echo $apotek->tampilObatTersedia();

?>