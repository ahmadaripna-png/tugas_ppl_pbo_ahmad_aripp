<?php 
class siswa {
    private $nama;
    private $nilaiPBO;

    public function setData($namaBaru, $nilaiBaru) {
        $this->nama =$namaBaru;

        if($nilaiBaru <=100) {
        $this->nilaiPBO = $nilaiBaru;
        } else {
        $this->nilaiPBO = 100;
        }
    }

    public function getinfo() {
   return "Siswa: " . $this->nama . ", nilai PBO: " . $this->nilaiPBO;
}
}

$siswa1 = new siswa();

$siswa1->setData("Ahmad waluh", 100);
echo $siswa1->getinfo();
?>