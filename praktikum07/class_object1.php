<?php
class Mamalia
{
    public $jumlahkaki;
    public $berekor;
    function menyusui()
    {
        return "Hewan menyusui";
    }
    function melahirkan()
    {
        return "Hewan melahirkan";
    }
 
}
$objectMamalia = new Mamalia();
echo $objectMamalia->melahirkan();
echo "<br>";
echo $objectMamalia->menyusui();
echo "<br>";
echo $objectMamalia->jumlahkaki= 2;