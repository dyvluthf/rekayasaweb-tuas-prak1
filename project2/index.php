<?php
// 1. Membuat array dan encode ke JSON
$data = [
    "nama" => "Budi",
    "umur" => 25,
    "kota" => "Jakarta"
];

$jsonData = json_encode($data);
echo "Hasil Encode ke JSON:\n";
echo $jsonData . "\n\n";

// 2. Membuat variabel JSON dan decode ke PHP Object & Array
$jsonString = '{"nama":"Siti","umur":30,"kota":"Bandung"}';

// Decode ke Object
$obj = json_decode($jsonString);
echo "Data dari JSON (PHP Object):\n";
echo "Nama: " . $obj->nama . "\n";
echo "Umur: " . $obj->umur . "\n";
echo "Kota: " . $obj->kota . "\n\n";

// Decode ke Array
$arr = json_decode($jsonString, true);
echo "Data dari JSON (PHP Array):\n";
echo "Nama: " . $arr["nama"] . "\n";
echo "Umur: " . $arr["umur"] . "\n";
echo "Kota: " . $arr["kota"] . "\n";
?>
