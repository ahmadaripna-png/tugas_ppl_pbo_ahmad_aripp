<?php
class kendaraan 
{
public $merk;
public function __construct($merk)
{
 $this->merk = $merk;
}
public function berjalan()
{
    return $this->merk . " sedang melaju...";
}
}

class Mobil extends Kendaraan 
{
    public $jumlahPintu = 4;
    public function bukapintu()
    {
        return "Membuka " . $this->jumlahPintu . " pintu mobil " . $this->merk;
    }
}

$mobil1RPL = new Mobil("Waluh Geboy");
echo $mobil1RPL->berjalan(); 
echo "<br>";
echo $mobil1RPL->bukaPintu();