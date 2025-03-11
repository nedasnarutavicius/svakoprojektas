<?php
function funkc2($skaicius) {
    $iteracijos = 0;
    $max_reiksme = $skaicius;
    
    while ($skaicius != 1) {
        if ($skaicius % 2 == 0) {
            $skaicius = $skaicius / 2;
        } else {
            $skaicius = 3 * $skaicius + 1;
        }
        $iteracijos++;
        
        if ($skaicius > $max_reiksme) {
            $max_reiksme = $skaicius;
        }
    }
    
    return [$iteracijos, $max_reiksme];
}

echo "Įveskite intervalo pradžią: ";
$pradzia = intval(fgets(STDIN));

echo "Įveskite intervalo pabaigą: ";
$pabaiga = intval(fgets(STDIN));

$max_reiksme_skaicius = $pradzia;
$max_iteracijos_skaicius = $pradzia;
$min_iteracijos_skaicius = $pradzia;
$rezultatai = [];

for ($i = $pradzia; $i <= $pabaiga; $i++) {
    list($iteracijos, $max_reiksme) = funkc2($i);
    $rezultatai[$i] = ['iteracijos' => $iteracijos, 'max' => $max_reiksme];

    if ($rezultatai[$i]['max'] > $rezultatai[$max_reiksme_skaicius]['max']) {
        $max_reiksme_skaicius = $i;
    }

    if ($rezultatai[$i]['iteracijos'] > $rezultatai[$max_iteracijos_skaicius]['iteracijos']) {
        $max_iteracijos_skaicius = $i;
    }

    if ($rezultatai[$i]['iteracijos'] < $rezultatai[$min_iteracijos_skaicius]['iteracijos']) {
        $min_iteracijos_skaicius = $i;
    }
}

echo "Didžiausia reikšmė: Skaičius: $max_reiksme_skaicius, Reikšmė: " . $rezultatai[$max_reiksme_skaicius]['max'] . "\n";
echo "Daugiausiai iteracijų turėjo: Skaičius: $max_iteracijos_skaicius, Iteracijų: " . $rezultatai[$max_iteracijos_skaicius]['iteracijos'] . "\n";
echo "Mažiausiai iteracijų turėjo: Skaičius: $min_iteracijos_skaicius, Iteracijų: " . $rezultatai[$min_iteracijos_skaicius]['iteracijos'] . "\n";
?>