<?php
echo "Hello, PHP! <br>";

$nama = "Akaza";
$umur = 19;
$aktif = true;
$nilai = 99.99;

echo "Nama: ".$nama."<br>";
echo "Umur: ".$umur."<br>";
echo "boolean: ".$aktif."<br>";
if ($aktif == true){
    $aktif = "Aku Mahasiswa";
    echo "Aktif: ".$aktif."<br>";
    echo "Nilai: ".$nilai."<br>";
}

?>