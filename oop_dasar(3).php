<?php

class Kendaraan
{

    //public bisa dari mana saja
    //protected dalam class atau class turunan
    //Property dan Method yang menggunuakan visibility protected tidak dapat di instance
    //private dalam class saja

    public $merk = "Toyota ";
    protected $warna = "Merah ";
    private $stnk = "STNK001 <br>";

    function akses()
    {
        echo $this->merk;
        echo $this->warna;
        echo $this->stnk;
    }
}

$motor = new Kendaraan();
// echo $motor->merk;
// echo $motor->warna;
// echo $motor->stnk;
$motor->akses();


class Kendaraan2 extends Kendaraan
{
    public $merk = "Mitsubishi ";
    protected $warna = "Biru ";

    function akses()
    {
        echo $this->merk;
        echo $this->warna;
        echo $this->stnk;
    }
}

$motor2 = new Kendaraan2();
// echo $motor2->merk;
// echo $motor2->warna;

$motor2->akses();
