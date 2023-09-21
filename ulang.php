<?php
// // For
// // Semuanya dimasukin ke dalam for
// $angka = 1;
// $angkamaks = 30;

// for($angka; $angka <= $angkamaks; $angka++){
//     echo "Perulangan for ke-" . $angka;
//     echo "<br>";
// }

// While
// Meriksa dulu baru melakukan perulangan
// $angka = 1;

// while ($angka <= 40){
//     $angka = $angka + 1;
//     echo "Perulangan while ke-" . $angka;
//     echo "<br>";
// }

// while ($angka <= 20){
//     echo "Perulangan while ke- $angka";
//     $angka++;
//     echo "<br>";
// }

// while ($angka <= 20):
//     echo "Perulangan while ke- $angka";
//     $angka++;
//     echo "<br>";
// endwhile;


// Do While
// Proses dulu baru ngecek
// $angka = 1;

// do {
//     echo "Perulangan Do While ke-" . $angka;
//     echo "<br>";
//     $angka++;
// } while ($angka <=30);

// ForEach loop -> array
$makanan = array("Sate'", "Pempeq", "Syeblaq", "Syome");
$a = 3;

foreach($makanan as $food){
    echo $a + 1 . "." . $food[$a];
    echo "<br>";
}

foreach($makanan as $food){
    echo $a++ . "." . $food;
    echo "<br>";
}

// Break Continue
$a = 0;
for($a; $a <= 30; $a++){
    if($a == 10){
        break;
    }
    echo "Loop Break ke - " .$a;
    echo "<br>";
}


?>