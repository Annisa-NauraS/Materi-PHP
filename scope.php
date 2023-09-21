<?php

// var Lokal hanya bisa diakses dalam kurung function
varLokal();

function varLokal(){
    $lokal = "bisa diakses";
    print "Variabel $lokal di dalam";
}

echo "<br>";

$lokal = "bisa diakses";
print "Variable $lokal di luar";


// var Publik hanya digunakan di luar function
varPublik();
$publik = 1000;

function varPublik(){
    print "Permen harganya $publik";
    echo "<br>";
}

echo "Jelly harganya $publik";
?>