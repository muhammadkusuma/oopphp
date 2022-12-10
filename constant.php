<?php
define('NAMA', 'M. Wira Ade Kusuma');

echo NAMA;

echo "<br>";

const UMUR = 20;
echo UMUR;
echo "<br>";

class Coba {
    const NAMA = 'M. Wira Ade Kusuma';
}

echo Coba::NAMA;
echo "<br>";

echo __FILE__;
echo "<br>";

function coba(){
    return __FUNCTION__;
}

echo coba();
echo "<br>";

class Coba1 {
    public $kelas = __CLASS__;
}

$obj = new Coba1;
echo $obj->kelas;


?>
