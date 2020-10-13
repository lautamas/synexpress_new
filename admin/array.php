<?php

//VARIABEL
$nama = 'budi';
$umur = 23;
$ipk  = 4;

echo $nama;
echo $umur;
echo $ipk;


//ARRAY
$data = ['budi', 23, 4]; //ARRAY NUMERIC


$data = [1 => 'budi', 2 => 23, 2 => 3]; //ARRAY NUMERIC
echo $data[2];


$data2 = ['nama' => 'budi', 'umur' => 23, 'ipk' => 4]; //ASSOCIATIVE ARRAY
echo $data2['nama'];
echo $data2['umur'];
echo $data2['ipk'];


//ARRAY MULTI DIMENSI
$data3 = [
   0 => ['nama' => 'budi', 'umur' => 23, 'ipk' => 4],
   1 => ['nama' => 'ani', 'umur' => 19, 'ipk' => 3.5]
];

echo $data3[1]['nama'];
