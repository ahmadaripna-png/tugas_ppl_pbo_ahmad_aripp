<?php

class Rental {
    private $hargaSewaPerHari;
    public function setHargaSewaPerHari($harga) {
        $this->hargaSewaPerHari = $harga;
    }

    public function getHargaSewaPerHari() {
        return $this->hargaSewaPerHari;
    }

    public function hitungDiskon($jumlahHari) {
        return 0; 
    }
}

class RentalMobil extends Rental {
    
    public function hitungDiskon($jumlahHari) {
        $totalSewa = $this->getHargaSewaPerHari() * $jumlahHari;
        
        if ($jumlahHari > 3) {
            return $totalSewa * 0.10;
        }
        return 0;
    }
}

class RentalMotor extends Rental {
    
    public function hitungDiskon($jumlahHari) {
        $totalSewa = $this->getHargaSewaPerHari() * $jumlahHari;
        
        if ($jumlahHari > 3) {
            return $totalSewa * 0.05;
        }
        return 0;
    }
}



echo "--- SISTEM RENTAL KENDARAAN ---\n\n";

// A. Instansiasi Object RentalMobil
$mobil = new RentalMobil();
$mobil->setHargaSewaPerHari(300000);
$hariSewaMobil = 5;

$diskonMobil = $mobil->hitungDiskon($hariSewaMobil);
$totalBayarMobil = ($mobil->getHargaSewaPerHari() * $hariSewaMobil) - $diskonMobil;

echo "PEMINJAMAN MOBIL:\n";
echo "Harga per hari   : Rp " . number_format($mobil->getHargaSewaPerHari(), 0, ',', '.') . "\n";
echo "Jumlah Hari      : " . $hariSewaMobil . " hari\n";
echo "Total Diskon     : Rp " . number_format($diskonMobil, 0, ',', '.') . " (10%)\n";
echo "Total yang dibayar: Rp " . number_format($totalBayarMobil, 0, ',', '.') . "\n\n";


$motor = new RentalMotor();
$motor->setHargaSewaPerHari(75000);
$hariSewaMotor = 3;

$diskonMotor = $motor->hitungDiskon($hariSewaMotor);
$totalBayarMotor = ($motor->getHargaSewaPerHari() * $hariSewaMotor) - $diskonMotor;

echo "PEMINJAMAN MOTOR:\n";
echo "Harga per hari   : Rp " . number_format($motor->getHargaSewaPerHari(), 0, ',', '.') . "\n";
echo "Jumlah Hari      : " . $hariSewaMotor . " hari\n";
echo "Total Diskon     : Rp " . number_format($diskonMotor, 0, ',', '.') . " (0%)\n";
echo "Total yang dibayar: Rp " . number_format($totalBayarMotor, 0, ',', '.') . "\n";

?>