<?php
$koor = array(
    array(8,2),
    array (2,4),
    array (1,7)
);

echo $koor[0][0];
echo "<br>";
echo $koor[0][1];
echo "<br>";
echo $koor[2][1];
echo "<br>";
echo $koor[1][0];
echo "<br>";
echo $koor[1][1];
echo "<br>";
echo $koor[2][0];
echo "<br>";
echo "<th>";

//untuk menambahkan array
$macam2 = array(121, "joko",44.99,"belajar PHP");
$macam2[4] = "duniailkom";
$macam2[5] = 212;
$macam2[6] = 3.14;
//$macam2[99] = "array baru";
$macam2[] = "array baru";

echo "<pre>";
print_r($macam2);
echo "</pre>";

echo "------------------------------------------<br>";

$string1="nama saya ";
$string2="indah";
$string3=$string1.$string2;
$string4="umur saya ";
$umur=17;

echo $string4.$umur." tahun<br>";

echo "$string3";
?>