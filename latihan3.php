<?php
class mahasiswa{
    public $nama;
    public $prodi;

    public function __construct($nama, $prodi)
    {
        $this->nama=$nama;
        $this->prodi=$prodi;
    }
    public function tampilkanData(){
        echo "Nama :" . $this->nama ."<br>";
        echo "Prodi :" . $this->prodi ."<br>";
    }
}

$mhs1= new mahasiswa(
    "Jaya", "Teknik Mesin"
);
$mhs2= new mahasiswa(
    "Rania", "Sastra Bahasa"
);
$mhs1->tampilkanData();
echo "<br>";
$mhs2->tampilkanData();