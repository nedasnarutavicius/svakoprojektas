<?php
function funkc1($skaicius) {
    $iteracijos = 0;
    echo "Pasirinktas skaičius $skaicius:\n";
    
    while ($skaicius != 1) {
        echo $skaicius . " ";
        $skaicius = ($skaicius % 2 == 0) ? $skaicius / 2 : 3 * $skaicius + 1;
        $iteracijos++;
    }
    echo "1\n";
    echo "Iteracijų kiekis: $iteracijos\n";
}

$skaicius = intval(readline("Įveskite skaičių: "));
funkc1($skaicius);
?>