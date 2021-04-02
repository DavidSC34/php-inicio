<?php include 'includes/header.php';

// while

$i = 0; //Inicializador

while ($i < 10) {
    echo  $i . "<br>";
    $i++; //incremento
}

echo "<br>";
//do while - ejecuta el codigo y luego comprueba

$i = 0;

do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);

/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 IMpirmir Fizz BUZZ
 */


//For Loop
// for ($i = 1; $i < 100; $i++) {
//     if ($i % 3 === 0 && $i % 5 === 0) {
//         echo $i . " - FIZZ BUZZ <br>";
//     } else if ($i % 3 === 0) {
//         echo $i . " - FIZZ <br>";
//     } else if ($i % 5 === 0) {
//         echo $i . " - Buzz <br>";
//     }
// }


// For each
$clientes = array('Pedro', 'Juan', 'Karen');

foreach ($clientes as $cliente) {
    echo $cliente . "<br>";
}


echo "<br>";
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach ($cliente as $valor) {
    echo $valor . "<br>";
}

foreach ($cliente as $key => $valor) {
    echo $key . " - " . $valor . "<br>";
}

include 'includes/footer.php';
