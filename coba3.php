<?php
//$mahasiswa = array('nama'=>"indah", 'alamat'=>"denpasar", 'umur'=>"20",'telepon'=>"087886651303");

//echo "<pre>";
//print_r($mahasiswa);
//echo "</pre>";

//echo "nomor saya adalah $mahasiswa[telepon]<br>";

echo"-------------------------------------------<br>";

$angka1=12;
$angka2=4+1;

$hasil=$angka1%$angka2;

echo "hasil modulo = $hasil <br>";

//increment

$a = 10;
$b = $a++;
$b = $a;
$c = ++$a;

echo "hasil incremennya a = $a <br>";
echo "hasil incremennya b = $b <br>";
echo "hasil incremennya c = $c <br>";

//perbandingan
echo "--------------------------------<br>";
$angka1=10;
$angka2="7";

if($angka1<$angka2){
    echo "kondisinya sama";
}else{
    echo "kondisinya tidak sama";
}

?>