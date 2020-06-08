<?php

//Encapsulation / Access Modifier
class Pesawat
{

    public $nama_pesawat;
    public $model;
    protected $mesin;
    private $tahun_pembuatan;

    public function terbangkan()
    {
        return "Menerbangkan pesawat $this->nama_pesawat";
    }
}

class Batik extends Pesawat
{
    public function info_pesawat()
    {
        $this->mesin = "VR-M150";
        return "Nama pesawat $this->nama_pesawat, Model $this->model, Mesin $this->mesin";
    }

    public function tahun_pembuatan()
    {
        return "Tahun pembuatan $this->tahun_pembuatan";
    }
}


$batik = new Batik();
$batik->nama_pesawat = "Batik AIRBUS";
$batik->model = "SH-M150";
//$batik->mesin = "OK-M150";

echo $batik->terbangkan() . "<br>";
echo $batik->info_pesawat() . "<br>";
echo $batik->tahun_pembuatan();
