<?php
class mahasiswa{
    public $nama;
    public $prodi;
    public function __construct()
    {
        $this->nama="Dito";
        $this->prodi="Sistem Informasi";
    }
    public function tampilkanData(){
        echo "Nama :" . $this->nama ."<br>";
        echo "Prodi :" . $this->prodi ."<br>";
    }
}
$mhs1=new mahasiswa();
$mhs1->tampilkanData();
?>