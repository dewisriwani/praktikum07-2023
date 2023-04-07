<?php
class Motor
{
    public $merk;
    public $cc;
    public $transmisi;

    function jalan()
    {
        return "merk motor $this->merk berjalan di jalan raya";
    } 
        function turing()
    {
        return "motor $this->merk adalah $this->cc CC";
    }
        function ngerem()
    {
        return "motor $this->merk bisa ngerem !";
    }
        function ngegas()
        {
        return "Motor $this->merk ini ngegas 
        dan transmisinya $this->transmisi";
        }
}

$motor = new Motor();
$motor->merk = "Yamaha FIZ 11O";
$motor->cc = 110;
$motor->transmisi = "manual";
echo $motor->jalan();
echo "<br>";
echo $motor->turing();
echo "<br>";
echo $motor->ngerem();
echo "<br>";
echo $motor->ngegas();
