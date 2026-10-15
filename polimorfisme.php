<?php

class profesi {
    public function berjalan() {
         return "Melakukan pekerjaan umum...";
    }
}

class Guru extends Profesi {
    public function bekerja() {
        return "Pergi ke kelas dan mengajar siswa SMK.";
    }
}

class Programer extends Profesi {
    public function bekerja() {
        return "Membuka VS code, mengetik kode PHP, dan meminum kopi,";
    }
} 
$pakGuru = new Guru();
$anakRPL = new Programer();
echo $pakGuru->bekerja();
echo "<br>";
echo $anakRPL->bekerja();
?>