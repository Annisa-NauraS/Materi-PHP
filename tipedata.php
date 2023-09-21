<?php

// // String
// $dataNumber = 2000;
// echo "MNomornya $dataNumber";
// echo "<br>";
// print $dataNumber;
// echo "<br>";
// var_dump($dataNumber);
// echo "<br>";
// print_r($dataNumber);

// echo "<br>";
// // Boolean
// // $dataBoolean = true;

// // if($dataBoolean){
// //     echo("Hasilnya True");
// // } else {
// //     echo ("hasilnya False");
// // }

// $dataBoolean = true;

// if($dataBoolean){
//     echo("Hasilnya $dataBoolean");
// } else {
//     echo ("hasilnya $dataBoolean");
// }
// // 1 = True, False = kosong

// // Null
// $dataNull1 = Null;
// $dataNull2 = 60;

// // print "Ini datanya $dataNull2";

// // Cek data Null
// $cekNull = is_null($dataNull1);
// echo $cekNull;

// echo "<br>";

// Array
$bias = array("Satu", "Dua", "Tiga", "Empat");
print "$bias[1] Kelebihan Satu";
echo "<br>";
echo $bias[0];
echo "<br>";

// array(berapa data {[index] tipedata(jumlahnya) isi datanya})
// var_dump($bias);


// // Operasi Array

// // Mengubah Data $variable[index] = "value";
// echo "<br>";
// $bias[1] = "Rudy";
// echo $bias[1];
// echo "<br>";
// echo "Bias diurutannya adalah " . $bias[2] = "Halo";

// // Menambahkan Data di Paling Belakang - $variable[] = "value";
// echo "<br>";
// echo $bias[] = "Lima";
// var_dump($bias);

// Hapus Data Pada Array - unset($variable[index]);
// unset($bias[2]);
// var_dump($bias);

// Menghitung Data di Array - echo count($variable);
// echo count($bias);

// Mapping Array ["key"]
$nama = array (
    "depan" => "Annisa",
    "tengah" => "Naura",
    "akhir" => "Salsabila",
    "alamat" => array(
        "kota" => "Malang",
        "negara" => "Indonesia"
    )
);
echo $nama["depan"];
echo $nama["alamat"]["kota"];
echo $nama["depan"]." ".$nama["alamat"]["kota"];
?>

