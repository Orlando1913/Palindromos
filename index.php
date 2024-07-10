<?php
function esPalindromo($palabras)
{
    $limpiarPalabras = strtolower(str_replace(' ', '', $palabras));


    $tamaño = strlen($limpiarPalabras);

    for ($i = 0; $i < $tamaño / 2; $i++) {
        if ($limpiarPalabras[$i] != $limpiarPalabras[$tamaño - $i - 1]) {
            return false;
        }
    }
    return true;
}

$palabras = [
    'anita lava la tina',
    'A man a plan a canal Panama',
    'racecar',
    'radar',
    'hello',
    'Was it a car or a cat I saw'   
];

foreach ($palabras as $palabras){
    if (esPalindromo($palabras)) {
        echo "\"$palabras\" es un palindromo. \n";
    }else{
        echo "\"$palabras\" no es un palindromo. \n";
    }
}


function esPalindromoAvanzado($palabrasAvanzadas){
    $limpiarPalabrasAvanzadas = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $palabrasAvanzadas));

    $tamañoAvanzado = strlen($limpiarPalabrasAvanzadas);

    for ($i=0; $i < $tamañoAvanzado / 2; $i++) { 
        if ($limpiarPalabrasAvanzadas[$i] != $limpiarPalabrasAvanzadas[$tamañoAvanzado - $i - 1]) {
            return false;
        }
    }
    return true;
}

$palabrasAvanzadas = [
    "A man, a plan, a canal, Panama!",
    "No 'x' in Nixon",
    "Eva, can I see bees in a cave?",
    "Hello, World!"
];

foreach ($palabrasAvanzadas as $palabrasAvanzadas) {
    if (esPalindromoAvanzado($palabrasAvanzadas)) {
        echo "\"$palabrasAvanzadas\" es un palindromo. \n";
    }else{
        echo "\"$palabrasAvanzadas\" no es un palindromo. \n";
    }
}

?>