<?php

function mdc($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    
    list($f1, $f2) = explode(" ", trim(fgets(STDIN)));

    
    $tamanhoMaximoPilha = mdc($f1, $f2);

    
    echo $tamanhoMaximoPilha . "\n";
}

?>