<?php
class buah
{
    public $namaBuah;
    public $warnaKulit;
    public $rasa;
    public $aroma;
    
    function __construct($nama, $warna, $taste, $bau)
    {
    $this->namaBuah = $nama;
    $this->warnaKulit = $warna;
    $this->rasa = $taste;
    $this->aroma = $bau;

    }
    function tumbuh()
    {
        return "Buah $this->namaBuah itu tumbuh !";
    }
    function busuk()
    {
        return "Buah $this->namaBuah itu busuk !";
    }
}
$object = new Buah("sirsak","merah","manis","harum");
echo $object->tumbuh();
echo "<br>";
echo $object->busuk();

