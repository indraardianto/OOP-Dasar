<?php

class Buah
{
    public $nama;
    public $warna;

    function __construct($nama, $warna)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        //return "$nama, $warna";
        //echo "ini dari method construct <br>";
    }

    function Matang()
    {
        return "Buah " . $this->nama . " mempunyai warna " . $this->warna;
    }

    // Kalau untuk destructor, memang relatif jarang digunakan.
    // Destructor biasanya dipakai pada bahasa pemrograman yang harus
    // secara manual menghapus objek. Karena jika tidak dihapus, objek
    // tersebut masih terdapat di memory. Akibatnya memory akan penuh
    // oleh objek2 program yang sebenarnya tidak diperlukan lagi.
    // Istilahnya, terdapat ‘memory leaking’. Umumnya ini ada di dalam
    // bahasa pemrograman ‘lawas’ seperti C atau C++ yang compilernya mungkin masih jadul.

    // Di dalam PHP, setiap objek otomatis akan dihapus dari memory begitu kode
    // PHP selesai dijalankan. Jadi kita tidak perlu menghapus objek secara manual.
    // function __destruct()
    // {
    //     echo "ini dari method destruct";
    // }
}

$apel = new Buah("Jeruk", "Kuning");
echo $apel->Matang();
// unset($apel);
// echo $apel->Matang();
// echo $apel->Matang();
