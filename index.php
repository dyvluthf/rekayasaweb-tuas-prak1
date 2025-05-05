<?php
// 1. Buat array dan encode ke format JSON
$mahasiswa = [
    "nama" => "DYVAN LUTHFI",
    "nim" => "G.231.22.0139",
    "umur" => 23
];

$json_mahasiswa = json_encode($mahasiswa);
echo "Hasil JSON Encode:\n" . $json_mahasiswa . "\n\n";

// 2. Decode JSON ke dalam bentuk PHP Object
$object_data = json_decode($json_mahasiswa);
echo "Akses sebagai Object:\n";
echo "Nama: " . $object_data->nama . "\n";
echo "NIM: " . $object_data->nim . "\n";
echo "Umur: " . $object_data->umur . "\n\n";

// Decode JSON ke dalam bentuk PHP Array
$array_data = json_decode($json_mahasiswa, true);
echo "Akses sebagai Array:\n";
echo "Nama: " . $array_data["nama"] . "\n";
echo "NIM: " . $array_data["nim"] . "\n";
echo "Umur: " . $array_data["umur"] . "\n";
?>
