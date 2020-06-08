<?php

//deklarasi class di php
class Kendaraan
{

    //deklarasi proprerty
    var $warna;
    var $merk;
    var $cc;

    function __construct()
    {
        echo "Ini dari function construct";
    }
    //deklarasi method
    function Maju()
    {
        return "Maju";
    }

    function Ngerem()
    {
        return "ngerem";
    }

    function getLabel()
    {
        return "$this->merk, $this->warna, $this->cc CC";
    }
}

//deklasi instance objek
$motor_mio = new Kendaraan();
$motor_mio->merk = "Mio J";
$motor_mio->warna = "Merah";
$motor_mio->cc = 150;

//mengakses function dari class
echo $motor_mio->Maju() . "<br>";
echo $motor_mio->Ngerem() . "<br>";
echo $motor_mio->getLabel() . "<br>";

?>


<h4>List Kendaraan</h4>
<ul>
    <li><?php echo $motor_mio->merk . ", " . $motor_mio->warna . ", " . $motor_mio->cc . " CC"; ?></li>
</ul>